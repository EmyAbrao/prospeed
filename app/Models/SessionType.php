<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionType extends Model
{
   protected $table = 'session_types';
   protected $fillable = ['description'];

   
    use HasFactory;
}
