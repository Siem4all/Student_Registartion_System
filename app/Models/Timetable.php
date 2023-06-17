<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id','schedule_id'
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');

    }
    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    
    }
}
