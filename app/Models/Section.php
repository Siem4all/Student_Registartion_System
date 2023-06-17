<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory','name','amount','address'
    ];

    public function schedule(){
        return $this->hasOne(Schedule::class);

    }
    
}
