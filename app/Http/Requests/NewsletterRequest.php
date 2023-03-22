<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => 'required|string|email|unique:newsletters,email',
        ];
    }
}
