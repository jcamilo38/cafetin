<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'

        ];
    }

    public function messages(){
        return [

        'name.required'=>'Debe ingresar un nombre de usuario',
        'email.required'=>'Debe ingresar un email válido',
        'password.required'=>'Debe ingresar una contraseña'
        ];
    }


}
