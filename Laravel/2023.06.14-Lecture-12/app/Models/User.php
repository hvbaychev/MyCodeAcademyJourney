<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Email;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public function email()
    {
        return $this->hasOne(Email::class)->select('email');
    }

    public function phones()
    {
        return $this->hasMany(Phone::class)->select('number');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'user_order')->withTimestamps();
    }
}
