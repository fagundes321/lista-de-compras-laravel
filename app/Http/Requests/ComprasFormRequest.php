<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComprasFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'nome' => ['required', 'min:3'],
            // 'mercado_id' => ['required']
        ];
    }


    public function messages()
    {
        return[
            'nome.required' => 'Todo Produto deve ter nome',
            'nome.min' => 'É obrigatorio ter pelomenos :min caracteres',
            // 'mercado_id.required' => 'Caso não haja mercado selecione S/M'
        ];
    }
}
