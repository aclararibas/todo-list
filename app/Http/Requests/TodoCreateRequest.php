<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true; //everyone is authorized to use my application
    }

    public function rules()
    {
        return [
            'title' => 'required|max:255' //field is required & maximum characters are 255, found it on Laravel Documentation
        ];
    }

    public function messages()
    {
        return [
            'title.max' => 'Oh no, your task should not be greater than 255 characters. Try again!' //this a custom message based on the requirements set above
        ];
    }
}




