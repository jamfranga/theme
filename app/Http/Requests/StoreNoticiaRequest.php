<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNoticiaRequest extends FormRequest
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
            'titulo' => 'required | max:50',
            'slug' => 'required | max:50',
            'resumen' => 'required | min:50',
            'texto' => 'required | min:50',
            'user_id' => 'required | numeric | min:0',
            'noticia_categoria_id' => 'required | numeric | min:0',
            'fecha_noticia' => 'required | date_format:d-m-Y'
        ];
    }
}
