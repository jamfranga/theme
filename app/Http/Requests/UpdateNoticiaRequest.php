<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNoticiaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'titulo' => 'required | max:50',
            'resumen' => 'required | min:50',
            'texto' => 'required | min:50',
            'id_usuario' => 'required | numeric | min:0',
            'id_categoria' => 'required | numeric | min:0',
            'fecha_noticia' => 'required | date_format:Y-m-d\TH:i'
        ];
    }
}
