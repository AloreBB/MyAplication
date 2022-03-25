<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeDocenteRequest extends FormRequest
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
            'nombres'=>'required|max25',
            'apellidos'=>'required|max25',
            'titulo'=>'required|max40',
            'cursoAsociado'=>'required|max40',
            'imagen'=>'required|image'
        ];
    }
}
