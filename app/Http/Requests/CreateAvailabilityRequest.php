<?php

namespace App\Http\Requests;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateAvailabilityRequest extends FormRequest
{
    public function rules()
    {
        return [
            'consultantId' => 'required|exists:users,id',
            'date' => 'required|date_format:Y-m-d',
            'fromTime' => 'required|date_format:H:i',
            'toTime' => 'required|date_format:H:i',
        ];
    }

    public function messages()
    {
        return [
            'consultantId.required' => 'Please select a consultant.',
            'consultantId.exists' => 'The selected consultant is invalid.',
            'date.required' => 'Please select a date.',
            'date.date_format' => 'The date must be in Y-m-d format.',
            'fromTime.required' => 'Please select a start time.',
            'fromTime.date_format' => 'The start time must be in H:i format.',
            'toTime.required' => 'Please select an end time.',
            'toTime.date_format' => 'The end time must be in H:i format.',
        ];
    }
}
