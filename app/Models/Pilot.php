<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $table = 'pilots';
    protected $fillable = ['name', 'email', 'phone'];
    
    
    
    use HasFactory;
}
