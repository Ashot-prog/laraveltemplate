<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Laravel\Sanctum\HasApiTokens;

class Candidate extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'birth_date',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'company_id', 'id');
    }

    public function jobs()
    {
        return $this->hasMany(Job::class, 'company_id', 'id');
    }

    public function getJobs()
    {
        $jobs = DB::table('jobs')
            ->join('candidates', 'jobs.company_id', '=', 'candidates.id')
            ->where('candidates.id', Auth::id())
            ->paginate(1,['*'],'app_job');
        return $jobs;
    }

    public function getApplications()
    {
        $applications = DB::table('applications')
            ->join('candidates', 'applications.company_id', '=', 'candidates.id')
            ->where('candidates.id', Auth::id())
            ->paginate(1,['*'],'app_page');
        return $applications;
    }

}
