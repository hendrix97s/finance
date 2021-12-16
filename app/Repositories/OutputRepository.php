<?php

namespace App\Repositories;

use App\Models\Output;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class OutputRepository.
 */
class OutputRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Output::class;
    }
}
