<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'address',
        'zip_code',
        'city',
        'state',
        'country',
    ];
    
}
