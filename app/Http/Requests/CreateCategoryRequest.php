<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name' => 'required|max:30'
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên thư mục không được để trống' ,
            'name.max' => 'Tên có tối đa 30 ký tự'
        ];
    }
}
