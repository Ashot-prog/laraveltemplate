<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable =[
        'candidate_id','job_id'
    ];
    public function applications()
    {
        return $this->hasMany(Application::class,'company_id','id');
    }
}
