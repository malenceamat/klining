<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StatisticRequest extends FormRequest
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
            'text' => ['required'],
            'sub_text' => ['required']
        ];
    }
    public function messages()
    {
        return [
            'text.required' => 'Основной заголовок обязателен',
            'sub_text.required' => 'Дополнительный текст обязателен'
        ];
    }
}
