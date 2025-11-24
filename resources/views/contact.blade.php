@extends('components.layout')

@section('title', 'Contact Me - My Portfolio')

@section('content')
    <div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
        <div class="relative max-w-xl mx-auto">
            <div class="text-center">
                <div class="flex justify-center mb-8">
                    <img src="{{ asset('myicon.png') }}" alt="My Icon" class="h-24 w-24 rounded-full shadow-lg">
                </div>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Get in Touch
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500">
                    Feel free to reach out through any of the platforms below.
                </p>
            </div>
            <div class="mt-12 flex flex-col items-center space-y-6">
                
                <!-- Phone -->
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <div class="text-lg text-gray-900 font-medium">
                        <a href="tel:+61426766470" class="hover:text-indigo-600">+61 426 766 470</a>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="text-lg text-gray-900 font-medium">
                        <a href="mailto:kartikmathur1994@gmail.com" class="hover:text-indigo-600">kartikmathur1994@gmail.com</a>
                    </div>
                </div>

                <!-- LinkedIn -->
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                        <svg class="h-8 w-8 text-indigo-600" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="text-lg text-gray-900 font-medium">
                        <a href="https://www.linkedin.com/in/kartik48/" target="_blank" class="hover:text-indigo-600">linkedin.com/in/kartik48</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
