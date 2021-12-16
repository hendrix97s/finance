<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class inputRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return auth()->check();
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    switch (true) {
      case ($this->getMethod() === "PUT"):
        return ['message' => 'required|string'];
        break;
      default: 
        return [
          'type'          => 'required|string',
          'description'   => 'required|string|min: 5',
          'value'         => 'required|numeric',
          'input_at'      => 'required|date',
        ];
        break;
    }
  }
}
