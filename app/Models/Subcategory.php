<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'banner',
        'icon',
        'slug',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'is_active',
        'created_at',
        'updated_at',
    ];

    protected $table = 'subcategories';


}
