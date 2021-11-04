<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable =[
        'title','image','jobs_count','sort','category','location', 'job_type', 'salary', 'employer', 'industry','level','experience'
    ];
}
