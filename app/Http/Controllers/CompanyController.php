<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\http\Controllers\admin\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index(Company $company)
    {
        $candidates = $company->getApplications();
        return view('frontend.company.index',compact('candidates'));

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
        $company = Company::create($request->all());
        if ($company) {
            Auth::login($company);
            return redirect(route('/'));
        }
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
