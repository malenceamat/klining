<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GalleryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => ['required'],
//            'type' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязателено',
//            'type.required' => 'Тип изображения обязателен'
        ];
    }
}
