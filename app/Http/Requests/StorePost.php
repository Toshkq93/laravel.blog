<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category_id' => 'required|integer',
            'image' => 'nullable|image',
        ];
    }

    public function messages()
    {
        return [
          'title.required' => 'Поле название обязательно для заполжнения',
          'description.required' => 'Поле описание обязательно для заполжнения',
          'content.required' => 'Поле контент обязательно для заполжнения',
          'category_id.required' => 'Поле ктегории обязательно для заполжнения',
        ];
    }
}
