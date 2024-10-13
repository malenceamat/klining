<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ServicesRequest extends FormRequest
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
            'text' => ['required'],
            'sub_text' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Изображение обязателено',
            'text.required' => 'Основной заголовок обязателен',
            'sub_text.required' => 'Дополнительный текст обязателен'
        ];
    }
}
