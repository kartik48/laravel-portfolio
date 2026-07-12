@extends('components.layout')

@section('title', 'Contact Me - My Portfolio')

@section('content')
    <div class="bg-black min-h-screen py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <div class="flex justify-center mb-6">
                    <div class="relative">
                        <img src="{{ asset('myicon.png') }}" alt="Profile" class="h-32 w-32 border-2 border-red-600 grayscale-[20%]">
                        <div class="absolute -bottom-2 -right-2 bg-red-600 h-6 w-6 border-2 border-black"></div>
                    </div>
                </div>
                <p class="font-display text-xl text-gray-500 mb-1">&gt; mail --compose</p>
                <h1 class="font-display text-5xl tracking-wide text-gray-100 sm:text-6xl mb-4">
                    Get in <span class="text-red-500">Touch</span>
                </h1>
                <p class="text-xl text-gray-500 max-w-2xl mx-auto">
                    Feel free to reach out through any of the platforms below. I'm always open to discussing new opportunities and collaborations.
                </p>
            </div>

            <!-- Contact Cards -->
            <div class="grid md:grid-cols-2 gap-6 mb-12">
                <!-- Phone Card -->
                <a href="tel:+61426766470" class="group bg-neutral-900 border-2 border-gray-700 hover:border-red-600 p-8 transition-colors duration-200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="border border-gray-700 group-hover:border-red-600 p-3 transition-colors">
                                <svg class="h-8 w-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-100 mb-1">Phone</h3>
                            <p class="text-red-400 font-medium">+61 426 766 470</p>
                            <p class="text-sm text-gray-500 mt-2">Call me for a quick chat</p>
                        </div>
                    </div>
                </a>

                <!-- Email Card -->
                <a href="mailto:kartikmathur1994@gmail.com" class="group bg-neutral-900 border-2 border-gray-700 hover:border-red-600 p-8 transition-colors duration-200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="border border-gray-700 group-hover:border-red-600 p-3 transition-colors">
                                <svg class="h-8 w-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-100 mb-1">Email</h3>
                            <p class="text-red-400 font-medium break-all">kartikmathur1994@gmail.com</p>
                            <p class="text-sm text-gray-500 mt-2">Send me a message</p>
                        </div>
                    </div>
                </a>

                <!-- LinkedIn Card -->
                <a href="https://www.linkedin.com/in/kartik48/" target="_blank" class="group bg-neutral-900 border-2 border-gray-700 hover:border-red-600 p-8 transition-colors duration-200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="border border-gray-700 group-hover:border-red-600 p-3 transition-colors">
                                <svg class="h-8 w-8 text-red-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-100 mb-1">LinkedIn</h3>
                            <p class="text-red-400 font-medium">linkedin.com/in/kartik48</p>
                            <p class="text-sm text-gray-500 mt-2">Let's connect professionally</p>
                        </div>
                    </div>
                </a>

                <!-- GitHub Card -->
                <a href="https://github.com/kartik48" target="_blank" class="group bg-neutral-900 border-2 border-gray-700 hover:border-red-600 p-8 transition-colors duration-200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="border border-gray-700 group-hover:border-red-600 p-3 transition-colors">
                                <svg class="h-8 w-8 text-red-500" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-gray-100 mb-1">GitHub</h3>
                            <p class="text-red-400 font-medium">github.com/kartik48</p>
                            <p class="text-sm text-gray-500 mt-2">Check out my code</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Additional Info Card -->
            <div class="bg-neutral-900 border-2 border-red-700 shadow-[6px_6px_0_0_rgba(220,38,38,0.35)] p-8 text-center">
                <div class="max-w-2xl mx-auto">
                    <h2 class="font-display text-3xl tracking-wide text-red-500 mb-3">Looking for collaboration?</h2>
                    <p class="text-gray-300 text-lg">
                        I'm currently open to new opportunities and interesting projects. Whether it's data analysis, data engineering, or building with AI, I'd love to hear from you!
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
