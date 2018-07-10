<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PapersRequest extends FormRequest
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
            //
            'titulo' => 'required|max:400',
            'photo_id' => 'required|image',
            'codigo' => 'required|max:12',
            'nombre' => 'required',
            'apellidos' => 'required',
            'año' => 'required',
            'title_id' => 'required',
            'teacher_id' => 'required'
            
            
        ];
    }
}
