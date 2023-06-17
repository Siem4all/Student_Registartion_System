<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    use HasFactory;
        protected $table = 'image_gallery';
        protected $fillable = ['user_id','image'];

        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
    
        }

}
