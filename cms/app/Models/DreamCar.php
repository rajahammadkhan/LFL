<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DreamCar extends Model
{
    use HasFactory;

    protected $connection = "web";
    
    protected $table = "dream_cars";
}
