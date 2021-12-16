<?php

namespace App\Services;

use App\Http\Requests\inputRequest;
use App\Repositories\InputRepository;

class InputService
{
    private $inputRepository;
    
    public function __construct(InputRepository $inputRepository){
        $this->inputRepository = $inputRepository;
    }
    
    public function store(inputRequest $request){
        return $this->inputRepository->create($request->toArray());
    }
}
