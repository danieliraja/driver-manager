<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome_completo" => "required|max:100",
            "cnh" => "required",
            "tipo_cnh" => "required",
            "endereco" => "required",
            "endereco" => "required",
            "veiculo_marca" => "required",
            "veiculo_modelo" => "required",
            "veiculo_placa" => "required",
            "veiculo_cor" => "required",
            "cidade" => "required",
            "estado" => "required",
        ];
    }
}
