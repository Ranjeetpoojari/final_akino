<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityDetail extends Model
{
   
    protected $fillable = [
        "id",
        "title",	
        "slug",	
        "location",	
        "Main_image",
        "video",	
        "description",	
        "activity_date",	
        "is_active",	
        "created_at",	
        "updated_at",	 
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'activity_detail';
}
