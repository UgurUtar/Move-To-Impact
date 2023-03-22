@extends('layouts.app')
@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endsection
@section('content')
    <section class="bg-main_dark_blue dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <img class="w-30 h-20 mb-5" src="/images/logo-blue.png" alt="logo">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Schedule a product demo
                    </h1>
                    <form id="schedule-demo-form" class="space-y-4 md:space-y-6" action="#">
                        {{ csrf_field() }}
                        <div>
                            <div class="my-2">
                                <input type="text" name="name" id="name" value="{{ old('name') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-main_turquoise focus:border-main_turquoise block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="John Doe" required="">
                            </div>
                            <div class="my-5">
                                <input type="text" name="companyName" id="companyName" value="{{ old('companyName') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-main_turquoise focus:border-main_turquoise block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Your company" required="">
                            </div>
                            <div class="my-5">
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-main_turquoise focus:border-main_turquoise block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@company.com" required="">
                            </div>
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input id="appointment-datepicker" datepicker datepicker-autohide
                                    datepicker-title="Demo date" datepicker-format="yyyy-mm-dd" type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main_turquoise focus:border-main_turquoise block w-full pl-10 p-2.5"
                                    placeholder="Select date" required>
                            </div>
                            <div class="flex mt-2">
                                <button type="button" onclick="checkAvailability()"
                                    class="p-2 bg-main_turquoise font-bold rounded-lg text-white">Check availability</button>
                            </div>
                            <div class="mt-2">
                                <div id="consultant-list"></div>
                            </div>
                        </div>
                        <button type="button" onclick="scheduleDemo()"
                            class="w-full text-white bg-main_turquoise hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center">Schedule
                            demo</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/datepicker.min.js"></script>
    <script src="{{ asset('js/scheduleAppointment.js') }}"></script>
@endsection
