<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class principal extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','last_name','img_profile'];
}