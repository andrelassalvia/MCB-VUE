<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
                'string',
                'min:3',
                'regex:/([a-zA-z])/'
            ),
            'tel' => array(
                'required',
                'unique:clients',
                'regex:/([0-9])/'
            ),
            'email' => 'email',
            'birth_date' => 'date',
            'firma_aberta' => 'boolean',
            'cnh' => 'boolean',
            'cpf' => 'boolean',
            'digital_certification' => 'boolean',
            'rg' => 'boolean',
            'passport' => 'boolean',
            'brazil_state_id' => 'integer',
            'brazil_city_id' => 'integer',
            'country_id' => 'integer',
            'city_id' =>  'integer',
            'client_status_id' => 'integer',
            'marital_status_id' => 'integer',
            'occupation_id' => 'integer'
        ];
    }
}
