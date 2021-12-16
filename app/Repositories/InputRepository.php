<?php

namespace App\Repositories;

use App\Models\Input;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

/**
 * Class InputRepository.
 */
class InputRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Input::class;
    }
}
