<?php

namespace App\Http\Controllers;

use App\Models\Azkar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AzkarController extends Controller
{
    /* public function index(Request $request)
    {
        $query = Azkar::query();

        // Search by title or description
        if ($request->has('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        // Determine page and limit
        $limit = $request->input('limit', 10); // Default limit to 10 items
        $azkars = $query->orderBy('created_at', 'desc')->paginate($limit, ['*'], 'page', $request->input('page', 1));

        // Customize the response to return only the desired fields
        return response()->json([
            'current_page' => $azkars->currentPage(),
            'data' => $azkars->items(), // Get the current page items only
            'total' => $azkars->total(), // Total number of records
        ]);
    } */

    public function index(Request $request)
    {
        $query = Azkar::query();

        // Search by title or description
        if ($request->has('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        // Retrieve all azkars ordered by created_at
        $azkars = $query->orderBy('created_at', 'desc')->get();

        // Customize the response to return only the desired fields
        return response()->json([
            'data' => $azkars, // Return all azkars
        ]);
    }


    // 2. Add a new azkar (POST)
    public function store(Request $request)
    {
        // Validate the request input
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'time' => 'required|string|max:255',
        ]);
        
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create a new azkar entry
        $azkar = Azkar::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'time' => $request->input('time'),
        ]);

        // Check if the total azkar count exceeds 10
        $azkarCount = Azkar::count();

        if ($azkarCount > 10) {
            // If more than 10 records, delete the oldest one (based on created_at)
            $oldestAzkar = Azkar::orderBy('created_at', 'asc')->first();
            $oldestAzkar->delete();
        }

        // Return a success response
        return response()->json(['message' => 'Azkar created successfully', 'azkar' => $azkar], 201);
    }


    public function destroy($id)
    {
        $azkar = Azkar::find($id);
        if ($azkar) {
            $azkar->delete();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => 'Azkar not found'], 404);
    }
}
