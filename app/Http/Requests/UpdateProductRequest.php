<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:10000|max:1000000',
            'category' => 'required|string|max:255',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'نام محصول را وارد کنید',
            'name.string' => 'نام محصول باید حروف باشد',
            'name.max' => 'نام محصول باید کمتر از 255 کاراکتر باشد',
            'price.required' => 'قیمت محصول را وارد کنید',
            'price.integer' => 'قیمت محصول باید عدد باشد',
            'price.min' => 'قیمت محصول باید بیشتر از 10000 باشد',
            'price.max' => 'قیمت محصول باید کمتر از 1000000 باشد',
            'category.required' => 'دسته بندی محصول را وارد کنید',
        ];
    }
}
