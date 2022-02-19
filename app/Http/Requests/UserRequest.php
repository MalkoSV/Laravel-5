<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'     => 'required',
          'email'    => 'required|email',
          'password' => 'required|between:6,10',

        ];
    }

    public function messages()
    {
        return [
          'required' => 'Не заполнили поле :attribute',
          'email.email' => 'Введите корректный email',
          'password.between' => 'В :attribute должно быть от :min до :max символов',
        ];
    }

}