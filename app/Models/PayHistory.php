<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PayHistory extends Model
{
    protected $table = 'pay_history';
    protected $fillable = ['pay_date', 'purchase_value', 'credit_type', 'employee_id', 'pilot_id'];
    protected $date = ['created_at', 'updated_at', 'date'];

    public function pilot()
    {
        return $this->belongsTo(Pilot::class);
    }
    public function employee()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
