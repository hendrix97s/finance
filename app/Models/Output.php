<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Output extends Model
{
    use HasFactory;
    
        
    protected $fillable = [
        'user_id',
        'type',
        'description',
        'value',
        'output_at',
    ];
    
    protected $hidden = [
        'id',
        'user_id'
    ];
}
