<?php

namespace App\Repositories;

use App\Models\Finance;

class FinanceRepository extends BaseRepository{
    
    public function __construct(){
        parent::__construct(Finance::class);
    }
    
    
}
