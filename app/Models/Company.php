<?php

namespace App\Models;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable =[
        'companyName','phoneNumber','level','experience'
    ];
    public function getApplications(){
        return $this->belongsToMany(Candidate::class, Application::class, 'candidate_id', 'company_id');
    }


}
