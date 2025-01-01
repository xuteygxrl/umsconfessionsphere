<?php

namespace App\Http\Controllers;

use App\models\Confession;
use App\models\Comment;
use App\Models\General;
use App\Models\universityLife;
use Illuminate\Http\Request;

class pageNavigation extends Controller
{


    public function home() {
        return view('system.umsconfessionsphere');
    }

    public function crushing(Request $request) {
        $query = Confession::query();
    
        // Base conditions
        $query->where('status', 'a')
              ->where('confessionCategoryId', 2)
              ->where('isDeleted', '!=', 1);
    
        // Search by content or user ID
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('content', 'like', "%{$search}%")
                  ->orWhere('userId', $search);
            });
        }
    
        // Apply filters
        if ($request->filled('filter')) {
            $filter = $request->input('filter');
    
            if ($filter == 'latest') {
                $query->orderBy('created_at', 'desc');
            } elseif ($filter == 'oldest') {
                $query->orderBy('created_at', 'asc');
            } elseif ($filter == 'single_date' && $request->filled('date')) {
                $query->whereDate('created_at', $request->input('date'));
            } elseif ($filter == 'date_range' && $request->filled(['start_date', 'end_date'])) {
                $query->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')]);
            }
        }
    
        // Paginate results
        $confession = $query->paginate(10);
    
        return view('system.crushing-list', ['confession' => $confession]);
    }

    public function general(Request $request) {
        $query = Confession::query();

        // Base conditions
        $query->where('status', 'a')
            ->where('confessionCategoryId', 1)
            ->where('isDeleted', '!=', 1);

        // Search by content or user ID
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('content', 'like', "%{$search}%")
                ->orWhere('userId', $search);
            });
        }

        // Apply filters
        if ($request->filled('filter')) {
            $filter = $request->input('filter');

            if ($filter == 'latest') {
                $query->orderBy('created_at', 'desc');
            } elseif ($filter == 'oldest') {
                $query->orderBy('created_at', 'asc');
            } elseif ($filter == 'single_date' && $request->filled('date')) {
                $query->whereDate('created_at', $request->input('date'));
            } elseif ($filter == 'date_range' && $request->filled(['start_date', 'end_date'])) {
                $query->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')]);
            }
        }

        // Paginate results
        $confession = $query->paginate(10);

        return view('system.general-list', ['confession' => $confession]);
    }

    public function universityLife(Request $request) {
        $query = Confession::query();

        // Base conditions
        $query->where('status', 'a')
            ->where('confessionCategoryId', 3)
            ->where('isDeleted', '!=', 1);

        // Search by content or user ID
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('content', 'like', "%{$search}%")
                ->orWhere('userId', $search);
            });
        }

        // Apply filters
        if ($request->filled('filter')) {
            $filter = $request->input('filter');

            if ($filter == 'latest') {
                $query->orderBy('created_at', 'desc');
            } elseif ($filter == 'oldest') {
                $query->orderBy('created_at', 'asc');
            } elseif ($filter == 'single_date' && $request->filled('date')) {
                $query->whereDate('created_at', $request->input('date'));
            } elseif ($filter == 'date_range' && $request->filled(['start_date', 'end_date'])) {
                $query->whereBetween('created_at', [$request->input('start_date'), $request->input('end_date')]);
            }
        }

        // Paginate results
        $confession = $query->paginate(10);

        return view('system.university-life-list', ['confession' => $confession]);
    }


    public function confession($confessionId){
        $confession = Confession::where('id',$confessionId)->first();
        $comment = Comment::where('confessionId',$confessionId)->get();
        return view('system.confession-template',['confession' => $confession,'comment'=>$comment]);
    }

    public function dashboard() {
        return view('system.umsconfessionsphere');
    }
}
