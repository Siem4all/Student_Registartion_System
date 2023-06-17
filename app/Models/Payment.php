<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','schedule_id','account_id','tfp_code','status'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');

    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    
    }
    public function account()
    {
        return $this->belongsTo(Account::class);
    
    }
}
