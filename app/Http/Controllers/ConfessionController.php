<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\confession;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
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
            $confession->isDeleted = 0;

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
    // Approve the confession
    public function approve($id)
    {
        try {
            $confession = Confession::findOrFail($id);
            $confession->status = 'a'; // Set the status to approved
            $confession->save();

            // Log success
            Log::info('Confession approved successfully', [
                'confession_id' => $confession->id,
                'user_id' => $confession->userId,
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Confession approved.');
        } catch (\Exception $e) {
            Log::error('Error approving confession', [
                'error' => $e->getMessage(),
            ]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while approving the confession.']);
        }
    }
    // Reject the confession
    public function reject($id)
    {
        try {
            $confession = Confession::findOrFail($id);
            $confession->status = 'r'; // Set the status to rejected
            $confession->save();

            // Log success
            Log::info('Confession rejected successfully', [
                'confession_id' => $confession->id,
                'user_id' => $confession->userId,
            ]);

            // Redirect back with success message
            return redirect()->back()->with('success', 'Confession rejected.');
        } catch (\Exception $e) {
            Log::error('Error rejecting confession', [
                'error' => $e->getMessage(),
            ]);
            return redirect()->back()->withErrors(['error' => 'An error occurred while rejecting the confession.']);
        }
    }


public function storeComment(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'confessionId' => 'required|exists:confession,id', // Ensure the confession exists
        'commentText' => 'required|string|max:1000',
    ]);

    // Save the comment
    Comment::create([
        'confessionId' => $validated['confessionId'],
        'userId' => auth()->id(), // Use the currently authenticated user
        'commentText' => $validated['commentText'],
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Comment added successfully!');
}

}
