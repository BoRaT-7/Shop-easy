<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'password',
        'address',
        'id_number',
        'business_name',
        'business_type',
        'bank_account_no',
        'payment_method',
        'image',
        'status',
    ];

    protected $hidden = [
        'password',
    ];
}