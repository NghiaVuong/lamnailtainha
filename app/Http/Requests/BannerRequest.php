<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'title' => 'required | max:255',
            'thumbnailOld' => 'required',

            'content' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề không được để trống.',
            'title.max' => 'Tiêu đề không quá 255 kí tự.',
            'thumbnailOld.required' => 'Chưa chọn ảnh.',
            'content.required' => 'Nội dung không được để trống.',
            // 'categories.required' => 'Chọn ít nhất 1 Danh mục phía trên.',
        ];
    }
}
