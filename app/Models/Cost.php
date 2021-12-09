<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'description',
        'value',
        'costed_at'
    ];
    
    protected $hidden = [
    
    ];
    
}
