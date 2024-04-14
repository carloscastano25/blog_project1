<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return[
            'title' => 'required|min:3|max:155',
            'content' => 'required|min:3'
        ];
    }
}