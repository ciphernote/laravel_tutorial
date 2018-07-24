<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploaderDemoRequest extends FormRequest
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
    public function rules() {
        return [
            //
            'username'=>'required',
            'thum'=>'required|image|mimes:jpeg,png,jpg,gif|max:1024|dimensions:max_width=600',
        ];
    }

    public function messages() {
        return [
            //
            "required" => "必須項目です。",
            "image" => "指定されたファイルが画像ではありません。",
            "mimes" => "指定された拡張子（PNG/JPG/GIF）ではありません。",
            "max" => "画像サイズが1MBを超えています。",
            "dimensions" => "画像の横幅は最大600pxです。",
        ];
    }
}
