<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
            'name' => array(
                'unique:occupations',
                'string',
                'min:3',
                'regex:/([a-zA-z])/'
            ),
            'tel_code' => 'unique:countries|string'
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'O valor informado já existe no cadastro',
            'name.string' => 'O campo nome do país aceita somente letras',
            'name.min' => 'O nome do país deve ter no mínimo 3 letras',
            'name.regex' => 'O campo nome do país aceita somente letras',
            'tel_code.unique' => 'O valor informado já existe no cadastro',
            'tel_code.string' => 'Este campo não aceita caracteres especiais'
        ];
    }
}
