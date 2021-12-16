<?php

namespace App\Http\Controllers;

use App\Http\Requests\inputRequest;
use App\Services\InputService;
use Illuminate\Support\Facades\Request;

class InputController extends Controller
{

    public function __construct(){
    }

    public function store(inputRequest $request, InputService $service)
    {
        $response = $service->store($request);
        if (!$response)
            return response()->json($response, 404);
        return response()->json($response, 200);
    }
}
