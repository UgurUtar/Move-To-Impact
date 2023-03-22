<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultantsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\NewslettersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/', [NewslettersController::class, 'store'])->name('newsletter.add');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');
Route::post('/admin/login', [AuthenticationController::class, 'login'])->name('admin.login.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/logout', [AuthenticationController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/consultants', [ConsultantsController::class, 'index'])->name('admin.consultants');
    Route::post('/admin/add-consultant', [ConsultantsController::class, 'store'])->name('admin.consultant.add');
    Route::delete('/admin/delete-consultant/{id}', [ConsultantsController::class, 'destroy'])->name('admin.consultant.delete');

    Route::get('/planner', function () {
        return view('planner');
    })->name('admin.appointments');

    Route::get('/admin/scheduled-appointments', [CalenderController::class, 'scheduledAppointmentsCalendar'])->name('admin.scheduled.appointments');
    Route::get('/admin/appointments', [AppointmentController::class, 'showScheduled'])->name('admin.scheduled.show');
    Route::get('admin/availability', [CalenderController::class, 'availabilityCalendar'])->name('admin.availability');
    Route::post('/admin/availability', [CalenderController::class, 'store'])->name('admin.availability.add');
    Route::get('/admin/individual-availability/{id}', [CalenderController::class, 'individualCalendar'])->name('admin.availability.individual');
    Route::get('/admin/availability/{id}', [CalenderController::class, 'show'])->name('admin.availability.show');
    Route::get('/admin/availabilities', [CalenderController::class, 'showAll'])->name('admin.availability.show.all');


});

Route::get('/available-consultants/{date}', [AppointmentController::class, 'availableConsultants'])->name('schedule.available.consultants');
Route::get('/schedule-demo', [AppointmentController::class, 'scheduleDemo'])->name('schedule.demo');
Route::post('/schedule-demo', [AppointmentController::class, 'store'])->name('schedule.demo.post');





