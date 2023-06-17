<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id','bank_id','account_no'
    ];

    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');

    }
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    
    }
}
