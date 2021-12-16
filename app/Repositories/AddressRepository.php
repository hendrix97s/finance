<?php

namespace App\Repositories;

use App\Models\Address;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class AddressRepository.
 */
class AddressRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Address::class;
    }
}
