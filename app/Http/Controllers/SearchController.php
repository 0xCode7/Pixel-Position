<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke() //For One Action
    {
        $jobs = Job::query()
            ->with(['employer', 'tags'])
            ->where('title', 'LIKE', '%' . request('q') . '%')
            ->get();
        return view('jobs.result', ['jobs' => $jobs]);
    }
}
