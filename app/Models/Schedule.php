<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id','section_id','start_at','days'
    ];

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');

    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    
    }

    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    
    }
}
