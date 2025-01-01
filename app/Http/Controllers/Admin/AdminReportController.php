<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Admin;
use App\models\Confession;
use App\models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminReportController extends Controller
{
    
    //view
    public function reportView()
    {
        $admin = Auth::guard('admin')->user();
        $confession = Confession::all();
        $report = Report::where('actionTake', '==', 0)
                        ->paginate(10); // Paginate the reports, 10 per page
        // dd($report);
    
        return view('admin.reportUser', ['admin' => $admin, 'confession' => $confession, 'report' => $report]);
    }

    public function resolveReport($id)
    {
        $report = Report::find($id);
        if ($report) {
            $report->actionTake = 1; // Mark as resolved
            $report->save();

            return redirect()->back()->with('success', 'Report resolved successfully!');
        }

        return redirect()->back()->with('error', 'Report not found.');
    }

}
