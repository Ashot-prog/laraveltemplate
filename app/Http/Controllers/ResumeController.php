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
        $resume = new Resume();

        $resume->fill(['name' => $request->input('name')]);
        $resume->fill(['email' => $request->input('email')]);
        $resume->fill(['phone' => $request->input('phone')]);
        $resume->fill(['birth_date' => $request->input('birth_date')]);
        $resume->fill(['job_title' => $request->input('job_title')]);
        $resume->fill(['position' => $request->input('position')]);
        $resume->fill(['salary' => $request->input('salary')]);
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
        $resume->update(['name' => $request->input('name')]);
        $resume->update(['email' => $request->input('email')]);
        $resume->update(['phone' => $request->input('phone')]);
        $resume->update(['birth_date' => $request->input('birth_date')]);
        $resume->update(['job_title' => $request->input('job_title')]);
        $resume->update(['position' => $request->input('position')]);
        $resume->update(['salary' => $request->input('salary')]);
        return redirect()->route('index');
    }
}
