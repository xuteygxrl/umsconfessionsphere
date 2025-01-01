<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Confession;
use Illuminate\Http\Request;

class ReportController extends Controller
{


    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'confessionId' => 'required|exists:confession,id',
            'category' => 'required|string',
            'reasoning' => 'required|string|max:1000',
        ]);

        $reportUser = Confession::where('id',$validated['confessionId'])->value('userId');
        // Save the report
        Report::create([
            'confessionId' => $validated['confessionId'],
            'userId' =>$reportUser, // Assuming a logged-in user
            'category' => $validated['category'],
            'reasoning' => $validated['reasoning'],
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Report submitted successfully!');
    }

}
