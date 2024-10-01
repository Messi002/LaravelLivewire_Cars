<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    // Allow these fields to be mass assigned
    protected $fillable = [
        'car_name',
        'brand',
        'engine_capacity',
        'fuel_type'
    ];
}
