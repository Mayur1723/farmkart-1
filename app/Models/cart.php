<?php

namespace App\Models;

use DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    //use HasFactory;
    public $fillable = ['name', 'price', 'quantity'];
}
