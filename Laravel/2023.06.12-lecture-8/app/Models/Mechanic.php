<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = ['mechanic_name', 'mechanic_email', 'mechanic_phone'];

    public function cars()
    {
        return $this->hasMany(Car::class, 'mechanic_id');
    }
}
