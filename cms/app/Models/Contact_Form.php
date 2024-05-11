<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Form extends Model
{
    use HasFactory;
    protected $connection = "web";

    protected $table = "contact_form";
}
