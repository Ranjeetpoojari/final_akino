<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    
    protected $fillable = [
        'campaign_id',
        'donation_type',
        'donation_amount',
        'full_name',
        'pancard',
        'email',
        'mobile',
        'address',
        'city',
        'state',
        'country',
        'transaction_id',
        'transaction_status',
        'order_id',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $table = 'donation';


}
