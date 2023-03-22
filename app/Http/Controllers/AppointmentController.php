<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoAppointments;
use Illuminate\Http\JsonResponse;
use App\Services\AppointmentService;
use App\Http\Requests\CreateDemoAppointmentRequest;
use App\Http\Resources\ScheduledAppointmentsResource;

class AppointmentController extends Controller
{
    private $appointmentService;

    public function __construct(AppointmentService $appointmentService)
    {
        $this->appointmentService = $appointmentService;
    }

    public function availableConsultants($date)
    {
        $appointments = $this->appointmentService->getAppointmentsByDate($date);
        return $appointments;
    }

    public function scheduleDemo() {
        return view('scheduleDemoAppointment');
    }

    public function store(CreateDemoAppointmentRequest $request) {
        DemoAppointments::create([
            'name' => $request->name,
            'email' => $request->email,
            'company' => $request->companyName,
            'date' => $request->date,
            'time_slot' => $request->timeslot,
            'consultant_id' => $request->consultantId,
        ]);
        return new JsonResponse('success', 200);
    }

    public function showScheduled() {
        return new JsonResponse(ScheduledAppointmentsResource::show(), 200);
    }
}
