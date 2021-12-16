<?php

namespace App\Repositories;

use App\Models\Contact;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class ContactRepository.
 */
class ContactRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Contact::class;
    }
}
