<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Department;
use App\Models\Service;
// use Overtrue\LaravelFollow\Traits\CanFollow;
// use Overtrue\LaravelFollow\Traits\CanBeFollowed;
// use Overtrue\LaravelFollow\Followable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'name',
        'user_role',
        'title',
        'phone',
        'prefix',
        'qualifications',
        'image',
        'signature',
        'stamp',
        'leave_hours',
        'department_id'
    ];

    static $rules = [
        'name' => 'required',
        'user_role'=>'required',
        'title'=>'required',
        'phone'=>'required',
        'prefix'=>'required',
        'qualifications'=>'required',
        'image'=>'required | image | mimes:jpeg,png,jpg,gif,svg,tiff | max:2048',
        'signature'=>'required',
        'department_id'=>'required',
        'email' => 'required|email|unique:users,email,$this->id,id',
        'password' => 'required|confirmed'
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
        $this->attributes['password'] = bcrypt($password);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function posts() {
  
        return $this->hasMany(Service::class);
     
    }
}
