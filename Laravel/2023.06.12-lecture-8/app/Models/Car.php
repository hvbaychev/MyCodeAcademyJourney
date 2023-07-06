<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['make', 'model'];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id');
    }
}
