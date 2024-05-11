<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $connection = "web";

    protected $table = "tickets";

    protected $fillable = ['coupon','name','slug','price','category','location','date','time','status'];
}
