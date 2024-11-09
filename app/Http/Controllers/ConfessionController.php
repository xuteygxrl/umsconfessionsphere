<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log; // Don't forget to import Log facade

class ConfessionController extends Controller
{


    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'confession' => 'required|string|max:1000',
            'confession_category_id' => 'required|exists:confession_category,id',
            'commentSwitch' => 'nullable|boolean' // Make commentSwitch optional and validate as a boolean
        ]);

        // Set default value for commentSwitch to 0 if not provided
        $validatedData['commentSwitch'] = $validatedData['commentSwitch'] ?? 0;

        try {
            // Create a new confession
            $confession = new Confession();
            $confession->content = $validatedData['confession'];
            $confession->userId = Auth::id(); // Assuming you're using authentication
            $confession->confessionCategoryId = $validatedData['confession_category_id']; // Get the selected category ID
            $confession->commentSwitch = $validatedData['commentSwitch']; // Set commentSwitch based on the request data

            $confession->save();

            // Log success
            Log::info('Confession submitted successfully', [
                'user_id' => $confession->userId,
                'confession_id' => $confession->id,
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Your confession has been submitted!');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error submitting confession', [
                'error' => $e->getMessage(),
                'request_data' => $request->all(),
            ]);

            // Handle any exceptions that occur during the saving process
            return redirect()->back()->withErrors(['error' => 'An error occurred while submitting your confession. Please try again.']);
        }
    }



}
