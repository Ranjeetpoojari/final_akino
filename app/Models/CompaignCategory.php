<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaignCategory extends Model
{
    protected $fillable = [
        'id',
        'title',
        'slug',
       'main_image',
        'short_discription',
        'image',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'campaigncategory';

}
