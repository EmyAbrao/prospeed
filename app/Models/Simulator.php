<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Simulator extends Model
{
    protected $table = 'simulator';
    protected $fillable = ['ip', 'simulator_name', 'current_pilot'];
    protected $date = ['created_at', 'update_at', 'date'];

    public function pilot()
    {
        return $this->hasOne(Pilot::class, 'current_pilot', 'id');
    }
    
    use HasFactory;
}
