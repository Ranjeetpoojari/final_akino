<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        "id",
        "title"	,
        "slug",	
        "main_images",
        "content",	
        "type",	
        "views"	,
        "blog_date",	
        "is_active",	
        "created_at",	
        "updated_at",	
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    protected $table = 'blog_detail';
}
