<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConsultantRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
