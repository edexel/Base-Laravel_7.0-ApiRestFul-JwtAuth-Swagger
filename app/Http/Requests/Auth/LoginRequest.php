<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ValidationRequest;

class LoginRequest extends ValidationRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email|min:6|max:150',
            'password'  => 'required|min:8|max:150'
           ];
    }

       /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
       return [
           'email.required' => 'Por favor ingresa un correo válido',
           'email.email' => 'Por favor ingresa un correo válido',
           'email.exists' => 'Tu usuario y/o contraseña son incorrectos, por favor verifica tus datos',
           'email.min' => 'Tu correo electrónico debe contener al menos 6 caracteres',
           'email.max' => 'Tu correo electrónico debe contener al máximo 150 caracteres',
           'password.required' => 'Tu usuario y/o contraseña son incorrectos, por favor verifica tus datos',
           'password.min' => 'Tu contraseña debe contener al menos 8 caracteres',
           'password.max' => 'Tu correo electrónico debe contener al máximo 150 caracteres',
       ];
    }
}
