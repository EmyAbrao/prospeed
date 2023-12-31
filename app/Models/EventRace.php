<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRace extends Model
{
    protected $table = 'events';
    protected $fillable = ['name'];
    
    use HasFactory;
}
