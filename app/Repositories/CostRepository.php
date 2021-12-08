<?php

namespace App\Repositories;

use App\Models\Cost;

class CostRepository extends BaseRepository{
    
    public function __construct(){
        parent::__construct(Cost::class);
    }
    
    
}
