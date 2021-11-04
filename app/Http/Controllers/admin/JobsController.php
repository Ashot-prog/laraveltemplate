<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required'],
            'location' => ['required'],
            'job_type' => ['required'],
            'salary' => ['required'],
            'employer' => ['required'],
            'industry' => ['required'],
            'level' => ['required'],
            'experience' => ['required']
        ]);
        Job::create($request->all());
        return redirect()->route('admin.job.index');
    }

    public function update(Request $request, Jobs $job)
    {
        $request->validate([
            'category' => ['required'],
            'location' => ['required'],
            'job_type' => ['required'],
            'salary' => ['required'],
            'employer' => ['required'],
            'industry' => ['required'],
            'level' => ['required'],
            'experience' => ['required']
        ]);
        Job::update($request->all());
        return redirect()->route('admin.jobs.index', ['job' => $job]);
    }
}
