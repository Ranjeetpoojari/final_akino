<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagDetail extends Model
{
    protected $fillable = [
       "blog_id",
       "tag",
       "type",
        "is_active",	
        "created_at",	
        "updated_at",	
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'tag_detail';
}
