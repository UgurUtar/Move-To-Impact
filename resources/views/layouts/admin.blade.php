<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Move to impact</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/js/app.js')
    @yield('assets')
</head>

<body>
    <div class="w-full h-full">
        <div class="flex">
            <aside class="h-screen sticky top-0">
                <!-- Sidebar starts -->
                <!-- Remove class [ hidden ] and replace [ sm:flex ] with [ flex ] -->
                <div style="min-height: 716px"
                    class="w-64 absolute sm:relative bg-main_dark_blue shadow md:h-full flex-col justify-between hidden sm:flex">
                    <div class="px-8">
                        <img class="" src="/images/logo-blue.png" alt="logo">
                        <ul class="mt-8">
                            <li class="flex w-full justify-between text-gray-400 cursor-pointer items-center mb-6">
                                <a href="{{ URL::route('admin.scheduled.appointments') }}"
                                    class="flex items-center {{ request()->is('admin/scheduled-appointments*') ? 'text-white' : '' }} ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                        <rect x="4" y="4" width="6" height="6"
                                            rx="1"></rect>
                                        <rect x="14" y="4" width="6" height="6"
                                            rx="1"></rect>
                                        <rect x="4" y="14" width="6" height="6"
                                            rx="1"></rect>
                                        <rect x="14" y="14" width="6" height="6"
                                            rx="1"></rect>
                                    </svg>
                                    <span class="text-sm ml-2">Appointments</span>
                                </a>
                            </li>
                            <li
                                class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                <a href="{{ URL::route('admin.consultants') }}"
                                    class="flex items-center {{ request()->is('admin/consultants*') ? 'text-white' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack"
                                        width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <polyline points="12 4 4 8 12 12 20 8 12 4" />
                                        <polyline points="4 12 12 16 20 12" />
                                        <polyline points="4 16 12 20 20 16" />
                                    </svg>
                                    <span class="text-sm ml-2">Consultants</span>
                                </a>
                            </li>
                            <li
                                class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                <a href="{{ URL::route('admin.availability') }}"
                                    class="flex items-center {{ request()->is('admin/availability*', 'admin/individual-availability*') ? 'text-white' : '' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-chart-line" width="18" height="18"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="4" y1="19" x2="20" y2="19" />
                                        <polyline points="4 15 8 9 12 11 16 6 20 10" />
                                    </svg>
                                    <span class="text-sm ml-2">Availability</span>
                                </a>
                            </li>
                            <li
                                class="flex w-full justify-between text-gray-400 hover:text-gray-300 cursor-pointer items-center mb-6">
                                <a href="{{ URL::route('admin.logout') }}"
                                    class="flex items-center ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="text-sm ml-2">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>

            <main id="app" class="w-screen py-4 px-4 bg-white">
                @yield('content')
            </main>
        </div>
    </div>
</body>
@yield('scripts')

</html>
