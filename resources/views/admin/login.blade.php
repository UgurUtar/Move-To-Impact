@extends('layouts.app')
@section('assets')
@endsection
@section('content')
    <section class="bg-main_dark_blue ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl">
                <img class="w-50 h-20 " src="https://movetoimpact.com/wp-content/uploads/2021/09/Bildschirmfoto-2021-09-06-um-20.15.32.png" alt="logo">
            </a>
            <div
                class="w-full bg-white rounded-lg shadow drop-shadow-xl  md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Sign in to your account
                    </h1>
                    @if ($errors->any())
                      <div role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                          Error
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                          <p>{{ $errors->first() }}</p>
                        </div>
                      </div>
                    @endif
                    <form class="space-y-4 md:space-y-6" action="{{ URL::route('admin.login.post') }}" method="post">
                        {{ csrf_field() }}
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-main_light_blue focus:border-main_light_blue block w-full p-2.5"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <input type="password" name="password" id="password" placeholder="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-main_light_blue focus:border-main_light_blue block w-full p-2.5"
                                required="">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-main_turquoise hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
