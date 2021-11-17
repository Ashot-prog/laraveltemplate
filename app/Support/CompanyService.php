<?php


namespace App\Support;


use App\Models\Application;
use App\Models\Candidate;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class CompanyService
{

    public function getCompanyData()
    {
        $jobs = Job::where("company_id",Auth::id())->get();
        $applications = Application::where('company_id', Auth::id())->pluck('candidate_id')->toArray();
        $candidates = Candidate::whereIn('id', $applications)->get();

        return ['jobs' => $jobs, 'candidates' => $candidates];
    }

}
