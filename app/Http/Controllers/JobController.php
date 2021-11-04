<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;

class JobController extends Controller
{
    public function index()
    {
        return view('frontend.company.job.index');
    }

    public function create()
    {
        return view('frontend.company.job.create');
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

    public function update(Request $request, Job $job)
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
