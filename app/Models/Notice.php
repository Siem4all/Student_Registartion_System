<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id','college_id','subject','body'
    ];

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id');

    }
}
