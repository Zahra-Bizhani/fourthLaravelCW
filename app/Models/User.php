<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function email():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => strtolower($value),
        );
    }
    protected function firstName():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucfirst($value),
        );
    }
    protected function lastName():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucfirst($value),
        );
    }
    protected function city():Attribute
    {
        return Attribute::make(
            set: fn (string $value) => ucfirst($value),
        );
    }
    protected function fullName():Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name." ".$this->last_name,
        );
    }

   



    // public function setEmailAttribute()
    // {
    //     return $this->attributes['email'] = strtolower($this->email);
    // }
}
