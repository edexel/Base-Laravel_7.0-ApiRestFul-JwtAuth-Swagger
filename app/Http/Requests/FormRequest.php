<?php
namespace App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;

abstract class FormRequest extends Request
{
    public function validate () {
        
        if (false === $this->authorize()) {
            throw new UnauthorizedException();
        }
        
        $validator = app('validator')->make($this->all(), $this->rules(), $this->messages());
        
        if ($validator->fails()) {
            
            throw new ValidationException($validator, $validator->errors());

        }
    }
    protected function authorize () {
        return true;
    }
    abstract protected function rules ();

    protected function messages () {
        return [];
    }
}