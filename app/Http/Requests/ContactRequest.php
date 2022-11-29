<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống!',
            'name.required' => 'Tên không được để trống!',
            'subject.required' => 'Tiêu đề không được để trống!',
            'message.required' => 'Nội dung không được để trống!',
            'email.email' => 'Email phải đúng định dạng!',
        ];
    }
}
