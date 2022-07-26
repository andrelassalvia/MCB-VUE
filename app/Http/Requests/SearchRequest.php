<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'client_status_id' => 'nullable|string',
            'name' => array('min:2', 'regex:/^[a-zA-Z]+$/', 'nullable'),
            'tel' => array('regex:/^[0-9+-]+$/', 'nullable'),
            'brazil_state_id' => array('regex:/^[0-9]+$/', 'nullable'),
            'brazil_city_id' => array('regex:/^[0-9]+$/', 'nullable'),
            'service_type_id' => array('regex:/^[0-9]+$/', 'nullable'),
            'order_status_id' => array('regex:/^[0-9]+$/', 'nullable'),
            'order_status' => array('string', 'nullable'),
            'providerName' => array('string', 'min:2', 'regex:/^[a-zA-Z]+$/', 'nullable'),
            'contact' => array('string', 'min:2', 'regex:/^[a-zA-Z]+$/', 'nullable'),
            'firma_aberta' => 'nullable',
            'cnh' => 'nullable',
            'cpf' => 'nullable',
            'digital_certification' => 'nullable',
            'passport' => 'nullable',
            'country_id' => array('regex:/^[0-9]+$/', 'nullable'),
            'city_id' => array('regex:/^[0-9]+$/', 'nullable')
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'O nome deve ter no mínimo 2 letras',
            'name.regex' => 'O campo nome aceita somente letras',
            'tel.regex' => 'O campo telefone aceita somente números',
            'brazil_state_id.regex' => 'Tipo de valor para estado é inválido',
            'brazil_city_id.regex'  => 'Tipo de valor para cidade é inválido',
            'service_type_id.regex' => 'Tipo de valor para demanda é inválido',
            'order_status_id.regex' => 'Tipo de valor para status é inválido',
            'providerName.string' => 'O campo nome aceita somente letras',
            'providerName.min' => 'O nome deve ter no mínimo 2 letras',
            'providerName' => 'O campo nome aceita somente letras',
            'contact.string' => 'O campo contato aceita somente letras',
            'contact.min' => 'O contato deve ter no mínimo 2 letras',
            'contact.regex' => 'O campo contato aceita somente letras',
            'firma_aberta' => 'Tipo de valor incorreto',
            'cnh' => 'Tipo de valor incorreto',
            'cpf' => 'Tipo de valor incorreto',
            'digital_certification' => 'Tipo de valor incorreto',
            'passport' => 'Tipo de valor incorreto',
            'country_id' => 'Tipo de valor incorreto',
            'city_id' => 'Tipo de valor incorreto'
        ];
    }
}
