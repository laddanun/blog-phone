<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStore extends FormRequest
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
            'name' => 'required',
            'tel' => 'required|max:10',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'กรุณากรอกชื่อ',
            'tel.required'  => 'กรุณากรอกข้อความ',
            'tel.max'  => 'กรอกเบอร์โทรแค่ 10ตัวท่านั้น',
            'address.required' => 'กรุณากรอกข้อความ',
        ];
    }
}
