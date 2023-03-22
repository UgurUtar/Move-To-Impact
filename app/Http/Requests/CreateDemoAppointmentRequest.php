<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDemoAppointmentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:50|alpha',
            'email' => 'required|email',
            'companyName' => 'required|string|max:50|alpha_num',
            'date' => 'required|date',
            'timeslot' => 'required|string|max:30',
            'consultantId' => 'required|exists:users,id',
        ];
    }
}
