<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['owner_name', 'owner_email', 'owner_phone'];

    public function cars()
    {
        return $this->hasMany(Car::class, 'owner_id');
    }
}
