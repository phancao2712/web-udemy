<?php

namespace Modules\Students\src\Models;

use App\Notifications\EmailVerifyQueued;
use App\Notifications\ResetPasswordQueued;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Modules\Courses\src\Models\Course;

class Student extends Authenticatable implements MustVerifyEmail,CanResetPassword
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'status',
        'address',
        'password',
        'phone',
        'email_verified_at'
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new EmailVerifyQueued);
    }

    public function sendPasswordResetNotification($token){
        $this->notify(new ResetPasswordQueued($token));
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'student_courses')->withPivot('status');
    }
}
