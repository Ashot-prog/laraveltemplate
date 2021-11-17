<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::withCount(['userFavorites' => function ($query) {
            $query->where('candidates.id', Auth::id());
        }])->get();

        return view("frontend.company.job.index",compact('jobs'));
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
        $data = [
            'category' => $request->get('category'),
            'location' => $request->get('location'),
            'job_type' => $request->get('job_type'),
            'salary' => $request->get('salary'),
            'employer' => $request->get('employer'),
            'industry' => $request->get('industry'),
            'level' => $request->get('level'),
            'experience' => $request->get('experience'),
            'company_id' => Auth::id(),
        ];
        Job::create($data);
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
