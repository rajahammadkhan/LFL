<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // protected $connection = "web";

    protected $table = "customer";

    protected $fillable = ['name','phone','email','address','country','uae_state','category_1','qty','amount','p_amt','rand','p_id','p_stat','date'];
}
