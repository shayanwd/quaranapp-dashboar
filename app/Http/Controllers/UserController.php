<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::orderBy('created_at', 'desc')->get();

        // Return the users as a JSON response
        return response()->json($users);
    }

    public function search($term)
    {
        // Fetch users that match the search term
        $users = User::where('fname', 'LIKE', "%{$term}%")
                     ->orWhere('lname', 'LIKE', "%{$term}%")
                     ->orWhere('email', 'LIKE', "%{$term}%")
                     ->orWhere('status', 'LIKE', "%{$term}%")
                     ->orderBy('created_at', 'desc')
                     ->get();

        // Return the filtered users as a JSON response
        return response()->json($users);
    }
    public function destroy($id)
    {
        // Find the user by ID
        $user = User::find($id);

        // Check if the user exists
        if (!$user) {
            return response()->json(['message' => 'User not found.'], 404);
        }

        // Delete the user
        $user->delete();

        return response()->json(['message' => 'User deleted successfully.'], 200);
    }

    public function sendTestEmail()
    {
        $to = 'hialikhanzai@gmail.com'; // Change to your recipient email
        $subject = 'Test Email from Laravel';
        $message = 'This is a test email sent from a Laravel controller.';
        $headers = 'From: info@pilotpaths.com'; // Change to your sending email

        // Using Laravel's Mail facade
        Mail::raw($message, function ($mail) use ($to, $subject) {
            $mail->to($to)
                 ->subject($subject)
                 ->from('info@pilotpaths.com'); // Change to your sending email
        });

        return "Email sent successfully!";
    }

}
