<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;

class CompanyController extends Controller
{
    public function index()
    {
        return view('frontend.company.index');
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
        $resume = new Resume();

        $resume->fill(['companyName' => $request->input('companyName')]);
        $resume->fill(['phoneNumber' => $request->input('phoneNumber')]);
        $resume->fill(['level' => $request->input('level')]);
        $resume->fill(['experience' => $request->input('experience')]);
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
        $resume = new Resume();

        $resume->update(['companyName' => $request->input('companyName')]);
        $resume->update(['phoneNumber' => $request->input('phoneNumber')]);
        $resume->update(['level' => $request->input('level')]);
        $resume->update(['experience' => $request->input('experience')]);
        return redirect()->route('index');
    }
}
