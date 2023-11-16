<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    protected $table = 'pilots';
    protected $fillable = ['phone', 'user_id'];
    
    public function usuario(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
    use HasFactory;
}
