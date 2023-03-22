<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Availability;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CreateAvailabilityRequest;
use App\Http\Resources\AvailabilityResource;
use App\Http\Resources\CreateAvailabilityResource;
use App\Http\Resources\IndividualAvailabilityResource;
use Illuminate\Support\Facades\Mail;

class CalenderController extends Controller
{
    public function availabilityCalendar(User $consultants)
    {
        return view('admin.scheduleAvailabilityCalendar')->with('consultants', $consultants->all());
    }

    public function store(CreateAvailabilityRequest $request)
    {
        $availability = Availability::create([
                'consultant_id' => $request->consultantId,
                'date' => $request->date,
                'start' => $request->fromTime,
                'end' => $request->toTime,
            ]);

        Mail::send('mails.appointmentVerificationMail', $availability->toArray(),
        function($message) use ($availability) {
            $message->to($availability->consultant->email, $availability->consultant->name)
                    ->subject('Appointment Verification');
        });

        return new JsonResponse(CreateAvailabilityResource::transformResponse($availability), 200);

    }

    public function individualCalendar(User $consultant)
    {
        return view('admin.individualAvailabilityCalendar')->with('consultant', $consultant);
    }

    public function show($id)
    {
        return new JsonResponse(IndividualAvailabilityResource::show($id), 200);
    }

    public function showAll() {
        return new JsonResponse(AvailabilityResource::show(), 200);
    }

    public function scheduledAppointmentsCalendar() {
        return view('admin.scheduledAppointmentsCalendar');
    }
}
