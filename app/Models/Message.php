<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Carbon;

/**
 * @property string $message
 * @property string $passed_time
 */
class Message extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'from_id', 'to_id', 'message', 'posters'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    public function company()
    {
        return $this->belongsTo(Candidate::class, 'company_id', 'id');
    }

    public function getPassedTimeAttribute()
    {
        $minuteDiff = $this->created_at->diffInMinutes(Carbon::now());
        if ($minuteDiff < 60) {
            return $minuteDiff . ' minutes ago';
        }
        if ($minuteDiff < 1440){
            return round($minuteDiff/60) . ' hours ago';
        } else {
            return round($minuteDiff/1440) . ' days ago';
        }
    }

}
