<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurWorkDetail extends Model
{
    protected $fillable = [
        'id',
        'subcategory_id',
        'title',
        'slug',
        'category',
        'main_image',
        'slogan',
        'description',
        'total',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'our_workdetail';
}
