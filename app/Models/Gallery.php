<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {
    
    protected $fillable = [
        'album_id',
        'activity_id',
        'type',
        'image',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'gallery_details';


}
