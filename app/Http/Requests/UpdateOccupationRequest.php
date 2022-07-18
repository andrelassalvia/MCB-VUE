<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOccupationRequest extends FormRequest
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
                'required',
                'unique:occupations',
                'string',
                'min:3',
                'regex:/([a-zA-z])/'
            )
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome da ocupação é obrigatório',
            'name.string' => 'O campo nome da ocupação aceita somente letras',
            'name.min' => 'O nome da ocupação deve ter no mínimo 3 letras',
            'name.regex' => 'O campo nome da ocupação aceita somente letras',
            'name.unique' => 'O valor informado já existe no cadastro',
        ];
    }
}
