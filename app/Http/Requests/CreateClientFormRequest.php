<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientFormRequest extends FormRequest
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
            'nome'      => 'required|string|max:255',
            'nasc'      => 'required',
            'rg'        => 'required|max:255',
            'cpf'       => 'required|cpf',
            'genero'    => 'required',
            'logradouro'=> 'required',
            'endereco'  => 'required|max:255',
            'bairro'    => 'required|max:255',
            'cep'       => 'required|integer',
            'email'     => 'required|email|max:255',
            'image'     => 'required',
        ];
    }
}
