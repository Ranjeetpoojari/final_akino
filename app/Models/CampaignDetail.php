<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampaignDetail extends Model
{
    
    protected $fillable = [
        'title',
        'short_description',
        'camp_name',
        'description',
        'main_image',
        'meta_keyword',
        'meta_description',
        'fund_amount',
        'campiagn_type',
        'status',
        'is_active',
        'is_direct',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'campaign_details';


}
