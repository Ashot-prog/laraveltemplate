<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;

class ResumeController extends Controller
{
    public function index()
    {
        return view('frontend.candidate.resume.resume');
    }

    public function create()
    {
        return view('frontend.candidate.resume.add-resume');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'birth_date' => ['required'],
            'job_title' => ['required'],
            'position' => ['required'],
            'salary' => ['required']
        ]);
        Resume::create($request->all());
        return redirect()->route('index');
    }

    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'birth_date' => ['required'],
            'job_title' => ['required'],
            'position' => ['required'],
            'salary' => ['required']
        ]);
        Resume::update($request->all());
        return redirect()->route('index');
    }
}
