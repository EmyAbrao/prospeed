<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionRace extends Model
{
   protected $table = 'sessions';
   protected $fillable = ['car_id', 'pilot_id', 'event_id', 'racetrack_id', 'session_type_id'];

   public function pilot()
   {
        return $this->belongsTo(Pilot::class);
   }
   public function car()
   {
        return $this->belongsTo(Car::class);
   }
   public function event()
   {
        return $this->belongsTo(EventRace::class);
   }
   public function racetrack()
   {
        return $this->belongsTo(RaceTrack::class);
   }
   public function sessionType()
   {
        return $this->belongsTo(SessionType::class);
   }


    
    use HasFactory;
}
