<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeLap extends Model
{
   protected $table = 'time_lap';
   protected $fillable = ['session_id', 'session_1', 'session_2', 'session_3', 'finish_time', 'max_speed', 'total_laps', 'lap', 'valid_lap'];
   protected $date = ['created_at', 'updated_at'];

   public function session()
   {
        return $this->belongsTo(Session::class);
   }

    use HasFactory;
}