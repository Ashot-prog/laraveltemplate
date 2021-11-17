<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 'category', 'location', 'job_type', 'salary', 'employer', 'industry', 'level', 'experience'
    ];

    public function userFavorites()
    {
        return $this->belongsToMany(Candidate::class, 'favorite_jobs');
    }
}
