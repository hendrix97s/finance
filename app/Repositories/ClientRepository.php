<?php

namespace App\Repositories;

use App\Models\Client;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class ClientRepository.
 */
class ClientRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Client::class;
    }
    
}
