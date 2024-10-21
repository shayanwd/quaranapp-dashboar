<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;


class AuthController extends Controller
{

    public function uploadImage(Request $request) {
        $validator = Validator::make($request->all(), [
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Store the image temporarily
        $tempPath = $request->file('img')->store('temp', 'public');
    
        // Return the temporary path
        return response()->json(['tempPath' => $tempPath], 201);
    }
    
    // Register a new user
    
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $otp = rand(1000, 9999);
        $otp_expires_at = Carbon::now()->addHour();
        $request->img = $request->img ? $request->img : '';
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'otp' => $otp,
            'img' => $request->img,
            'otp_expires_at' => $otp_expires_at,
            'role' => 'user',  // Default role is 'user'
            'status' => 1, // Default status is 'on'
        ]);
    
        Mail::raw("Your OTP is: $otp", function ($message) use ($user) {
            $message->to($user->email)->subject('Your OTP Code');
        });
    
        // Return user object after registration
        return response()->json(['message' => 'User registered successfully. OTP sent to your email.', 'user' => $user], 201);
    }
    



    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        if ($user->otp !== $request->otp || Carbon::now()->gt($user->otp_expires_at)) {
            return response()->json(['message' => 'Invalid or expired OTP'], 400);
        }

        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        return response()->json(['message' => 'Registration completed successfully'], 200);
    }

    // Login
    public function resendOTP(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'User not registered'], 404);
        }
        //generate new OTP
        $otp = rand(1000, 9999);
        $otp_expires_at = Carbon::now()->addHour();
        Mail::raw("Your OTP is: $otp", function ($message) use ($user) {
            $message->to($user->email)->subject('Your OTP Code');
        });
        
        $user->otp = $otp;
        $user->otp_expires_at = $otp_expires_at;
        $user->save();
        $user->refresh();
        
        //is this line okay adn will work?
        return response()->json(['message' => 'New OTP Sent!', 'user' => $user], 200);
    }
    
    public function login(Request $request)
    {
        // Fetch the user by email
        $user = User::where('email', $request->email)->first();
    
        // Check if the user exists and if the password is correct
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    
        // Check if OTP is required (not null)
        if ($user->otp !== null) {
            $response = $this->resendOTP($request);
            $responseData = json_decode($response->getContent(), true);
            return response()->json(['message' => 'OTP required for verification', 'user' => $responseData['user']], 200);
        }
    
        // If OTP is null, proceed with login and generate a token (JWT, Passport, etc.)
        // For now, we are simply returning a login successful message.
        return response()->json(['message' => 'Login successful', 'user' => $user], 200);
    }
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'old_password' => 'nullable|string|min:8', // Old password validation
            'password' => 'nullable|string|min:8|confirmed', // New password validation
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user information
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

        // Check if old password is provided and matches the current password
        if ($request->filled('old_password') && Hash::check($request->input('old_password'), $user->password)) {
            // Update the password if a new one is provided
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }
        } elseif ($request->filled('old_password')) {
            // If the old password is provided but does not match, return an error
            return response()->json(['message' => 'Old password does not match.'], 403);
        }

        // Save the changes
        $user->save();

        // Return a response (you can customize this)
        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    }


    // Update user profile
    /* public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'string|max:255',
            'lname' => 'string|max:255',
            'phone' => 'unique:users,phone,' . auth()->user()->id,
            'email' => 'email|unique:users,email,' . auth()->user()->id,
            'password' => 'min:6|confirmed',
            'old_password' => 'required_with:password',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = auth()->user();

        if ($request->filled('password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                return response()->json(['message' => 'Incorrect previous password'], 400);
            }

            $user->password = Hash::make($request->password);
        }

        $user->update($request->only('fname', 'lname', 'phone', 'email'));

        return response()->json(['message' => 'Profile updated successfully'], 200);
    } */

    /* public function updateProfile(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'old_password' => 'nullable|string|min:8', // Old password validation
            'password' => 'nullable|string|min:8|confirmed', // New password validation
            'img' => 'nullable|string', // Added for image path
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user information
        $user->fname = $request->input('fname');
        $user->lname = $request->input('lname');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');

        $partial_destination_path = '';
        if ($request->filled('img')) {
            $tempPath = $request->input('img'); // Assuming this is the path from the temporary storage
            $imageName = basename($tempPath); // Get the image name from the path

            $sourcePath = storage_path('app/public/temp/' . $imageName);
            $partial_destination_path = 'images/' . $imageName;
            $destinationPath = public_path($partial_destination_path);

            // Ensure the destination directory exists
            if (!File::exists(public_path('images'))) {
                File::makeDirectory(public_path('images'), 0755, true); // Create directory if it doesn't exist
            }

            // Move the file
            File::move($sourcePath, $destinationPath); // Move the file from temp to images
        }

        // Check if old password is provided and matches the current password
        if ($request->filled('old_password') && Hash::check($request->input('old_password'), $user->password)) {
            // Update the password if a new one is provided
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }
        } elseif ($request->filled('old_password')) {
            // If the old password is provided but does not match, return an error
            return response()->json(['message' => 'Old password does not match.'], 403);
        }

        // Save the changes
        $user->img = $partial_destination_path != '' ? $partial_destination_path : $user->img;
        $user->save();

        // Return a response (you can customize this)
        return response()->json(['message' => 'User updated successfully', 'user' => $user]);
    } */

    public function updateProfile(Request $request, $id)
    {
        // Fetch the user by ID
        $user = User::find($id);

        if (!$user) {
            return response()->json(['status' => 'error', 'message' => 'User not found'], 200);
        }

        // Validation and profile update logic
        $validator = Validator::make($request->all(), [
            'fname' => 'string|max:255',
            'lname' => 'string|max:255',
            'phone' => 'required|unique:users,phone,' . $user->id,
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'old_password' => 'required_with:password',
            'img' => 'string'
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => 'error', 'errors' => $validator->errors()], 200);
        }

        if ($request->filled('password')) {
            if (!Hash::check($request->old_password, $user->password)) {
                return response()->json(['status' => 'error', 'message' => 'Incorrect previous password'], 200);
            }

            $user->password = Hash::make($request->password);
        }

        if ($request->filled('old_password') && !($request->filled('password') || $request->filled('password_confirmation'))) {
            if (!Hash::check($request->old_password, $user->password)) {
                return response()->json(['status' => 'error', 'message' => 'Incorrect previous password'], 200);
            }
        }

        // Update other fields
        $user->update($request->only('fname', 'lname', 'phone', 'email', 'img'));
        
        // Reload the user to get the updated data
        $user->refresh();

        return response()->json(['status' => 'success', 'message' => 'Profile updated successfully', 'user' => $user], 200);
    }





    // login with phone
    public function requestEmailOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Find the user by phone number
        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        // Generate a random OTP
        $otp = rand(1000, 9999);

        // Store the OTP in the database, associate it with the user
        DB::table('otp_requests')->insert([
            'phone' => $user->phone,
            'otp' => $otp,
            'created_at' => now(),
        ]);

        // Send the OTP to the user's email
        Mail::raw("Your OTP is: {$otp}", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Your OTP for Email Retrieval');
        });

        //overwriting otp by assigning new one and not from the users' table column
        $user->otp = $otp;

        return response()->json(['message' => 'OTP sent to your email.', 'user' => $user], 200);
    }

    // OTP Verification Method
    public function verifyEmailOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|string',
            'otp' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('phone', $request->phone)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        $otpRequest = DB::table('otp_requests')->where('phone', $request->phone)->latest()->first();

        if (!$otpRequest || $otpRequest->otp !== $request->otp || Carbon::now()->gt(Carbon::parse($otpRequest->created_at)->addMinutes(5))) {
            return response()->json(['message' => 'Invalid or expired OTP'], 400);
        }

        DB::table('otp_requests')->where('phone', $user->phone)->delete();

        // Return the user object after OTP verification
        return response()->json(['message' => 'OTP verified successfully.', 'user' => $user], 200);
    }




    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Use Laravel's built-in password broker to send the reset link
        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return response()->json(['message' => __($status)], 200);
        }

        return response()->json(['message' => __($status)], 400);
    }

    public function resetPassword(Request $request)
    {
        Log::info('Reset Password Request', ['email' => $request->email, 'token' => $request->token]);

        $request->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Verify the token directly with Laravel's password broker
        $status = Password::broker()->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'), 
            function ($user, $password) {
                $user->password = Hash::make($password);
                $user->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json(['message' => 'Password successfully reset']);
        }

        return response()->json(['message' => 'Invalid token or email'], 400);
    }



}
