<?php

namespace Ts2013\RealEstateContactForm\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstateContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'state',
        'zip_code',
        'phone',
        'price_range_from',
        'price_range_to',
        'message',
        'number_of_bedrooms',
        'number_of_bathrooms',
        'type_of_property',
    ];
}
