@extends('layouts.admin')
@section('assets')
@endsection
@section('content')
    <div id="add-consultant-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full bg-gray-600 transition duration-150 ease-in-out z-10">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Add consultant
                    </h3>
                    <button type="button" data-modal-hide="add-consultant-modal"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <form method="post" action="{{ route('admin.consultant.add') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div class=" col-span-2">
                            @if ($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                                    role="alert">
                                    <strong class="font-bold">Error!</strong>
                                    <span class="block sm:inline">{{ $errors->first() }}</span>
                                </div>
                            @endif
                        </div>
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="first and last name" required="">
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                placeholder="email" required="">
                        </div>
                        <div>

                            <label class="block mb-2 text-sm font-medium text-gray-900"
                                for="multiple_files">Avatar</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer"
                                id="multiple-files" type="file" multiple>


                        </div>

                    </div>
                    <button type="submit" id="submit-consultant-button"
                        class="bg-[#98f0d7] text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        Add Consultant
                    </button>
                </form>
            </div>
        </div>
    </div>




    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-main_dark_blue">Consultants</h2>
            </div>
            <div class="flex w-full justify-end my-3">
                <button data-modal-target="add-consultant-modal" data-modal-toggle="add-consultant-modal" id="add-consultant-button"
                    class="bg-main_turquoise text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <span class="mr-2">Add consultant</span>
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 52 52"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M26,0C11.664,0,0,11.663,0,26s11.664,26,26,26s26-11.663,26-26S40.336,0,26,0z M26,50C12.767,50,2,39.233,2,26
	                	S12.767,2,26,2s24,10.767,24,24S39.233,50,26,50z" />
                            <path
                                d="M38.5,25H27V14c0-0.553-0.448-1-1-1s-1,0.447-1,1v11H13.5c-0.552,0-1,0.447-1,1s0.448,1,1,1H25v12c0,0.553,0.448,1,1,1
	                	s1-0.447,1-1V27h11.5c0.552,0,1-0.447,1-1S39.052,25,38.5,25z" />
                        </g>
                    </svg>
                </button>
            </div>
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($consultants as $consultant)
                    <div id="individual-availability-{{ $consultant->id }}" class="text-center text-gray-500 border-2 border-main_turquoise bg-white p-5 rounded-md shadow">
                        <div class="flex justify-end mb-2">
                            <form action="{{ URL::route('admin.consultant.delete', ['id' => $consultant->id]) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="bg-main_turquoise p-2 rounded-md">
                                    <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0 0 300.003 300.003" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path
                                                    d="M150,0C67.159,0,0.001,67.159,0.001,150c0,82.838,67.157,150.003,149.997,150.003S300.002,232.838,300.002,150
			C300.002,67.159,232.839,0,150,0z M206.584,207.171c-5.989,5.984-15.691,5.984-21.675,0l-34.132-34.132l-35.686,35.686
			c-5.986,5.984-15.689,5.984-21.672,0c-5.989-5.991-5.989-15.691,0-21.68l35.683-35.683L95.878,118.14
			c-5.984-5.991-5.984-15.691,0-21.678c5.986-5.986,15.691-5.986,21.678,0l33.222,33.222l31.671-31.673
			c5.986-5.984,15.694-5.986,21.675,0c5.989,5.991,5.989,15.697,0,21.678l-31.668,31.671l34.13,34.132
			C212.57,191.475,212.573,201.183,206.584,207.171z" />
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @if (!empty($consultant->avatar))
                            <img class="mx-auto mb-4 w-36 h-36 rounded-full"
                                src="{{ asset("consultantAvatars/$consultant->avatar") }}" alt="Bonnie Avatar">
                        @else
                            <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="{{ asset('placeholders/avatar.png') }}"
                                alt="Bonnie Avatar">
                        @endif
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 ">
                            <a href="#" class="text-black">{{ $consultant->name }}</a>
                        </h3>
                        <p class="text-black font-bold mb-6">{{ $consultant->email }}</p>
                        <a href="{{ URL::route('admin.availability.individual', $consultant->id) }}" class="bg-main_turquoise text-white rounded-md p-4">
                            View availability
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection
