<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

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
        $Job = new JobsController();

        $Job->fill(['title' => $request->input('category')]);
        $Job->fill(['image' => $request->input('location')]);
        $Job->fill(['jobs_count' => $request->input('job_type')]);
        $Job->fill(['sort' => $request->input('salary')]);
        $Job->fill(['sort' => $request->input('employer')]);
        $Job->fill(['sort' => $request->input('industry')]);
        $Job->fill(['sort' => $request->input('level')]);
        $Job->fill(['sort' => $request->input('experience')]);
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
        $job->update(['category' => $request->input('category')]);
        $job->update(['location' => $request->input('location')]);
        $job->update(['job_type' => $request->input('job_type')]);
        $job->update(['salary' => $request->input('salary')]);
        $job->update(['employer' => $request->input('employer')]);
        $job->update(['industry' => $request->input('industry')]);
        $job->update(['level' => $request->input('level')]);
        $job->update(['experience' => $request->input('experience')]);
        return redirect()->route('admin.jobs.index', ['job' => $job]);
    }
}
