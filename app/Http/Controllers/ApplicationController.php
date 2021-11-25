<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    public function index()
    {
        $company =Auth::user();
        $messages = $company->messages()->get();
        $applications = $company->applications()->paginate(2,['*'],'app_page');
        return view('messages.index', compact('applications', 'messages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => ['required'],
            'job_id' => ['required']
        ]);
        Application::create($request->all());
        return redirect()->route('index');
    }

    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'candidate_id' => ['required'],
            'job_id' => ['required']
        ]);
        Application::update($request->all());
        return redirect()->route('index');
    }
}
