<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        $applications= Application::query()->get();
        $candidates= Candidate::applications();

        return view('frontend.company.index',compact('applications','candidates'));

    }

    public function create()
    {
        return view('frontend.company.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'companyName' => ['required'],
            'phoneNumber' => ['required'],
            'level' => ['required'],
            'experience' => ['required']
        ]);
        Resume::create($request->all());
        return redirect()->route('index');
    }

    public function update(Request $request, Resume $resume)
    {
        $request->validate([
            'companyName' => ['required'],
            'phoneNumber' => ['required'],
            'level' => ['required'],
            'experience' => ['required']
        ]);
        Resume::update($request->all());

        return redirect()->route('index');
    }
}
