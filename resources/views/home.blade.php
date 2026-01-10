@extends('components.layout')

@section('title', 'Home - My Portfolio')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-indigo-50 via-white to-purple-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 lg:py-32">
            <div class="text-center">
                <h1 class="text-5xl tracking-tight font-extrabold text-gray-900 sm:text-6xl md:text-7xl">
                    <span class="block">Hi, I am</span>
                    <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">Kartik</span>
                </h1>
                <p class="mt-6 max-w-3xl mx-auto text-lg sm:text-xl text-gray-600 leading-relaxed">
                    A data analyst and full-stack developer with a strong foundation in Python, SQL, and Laravel/PHP. I specialise in turning data into insight and ideas into reliable software. With experience across analytics projects, machine-learning prototypes, operational dashboards, and end-to-end web application development, I enjoy solving real problems from both sides, understanding the data and building the tools that make it useful.
                </p>
                <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-gray-500">
                    Curious, hands-on, and product-focused, I'm drawn to work that blends analysis, engineering, and meaningful impact.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('projects.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-semibold rounded-lg text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 shadow-lg hover:shadow-xl transition-all duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-semibold rounded-lg text-indigo-700 bg-white hover:bg-gray-50 shadow-md hover:shadow-lg transition-all duration-200 border-2 border-indigo-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Me
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 -z-10 transform-gpu overflow-hidden blur-3xl" aria-hidden="true">
            <div class="relative aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-indigo-200 to-purple-200 opacity-30 sm:w-[72.1875rem]"></div>
        </div>
    </div>

    <!-- Featured Projects Section -->
    <div class="bg-gradient-to-b from-white to-gray-50 py-20" x-data="{ activeProject: null }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                    Featured Projects
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-600">
                    Check out some of my recent work.
                </p>
            </div>
            <div class="grid gap-8 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <div class="group flex flex-col bg-white rounded-2xl shadow-md hover:shadow-2xl overflow-hidden border border-gray-100 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="flex-shrink-0 relative overflow-hidden">
                            <img class="h-56 w-full object-cover transition-transform duration-300 group-hover:scale-110" src="{{ $project->thumbnail_url ?? 'https://via.placeholder.com/400x300' }}" alt="{{ $project->title }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @if($project->tags)
                                        @foreach($project->tags as $tag)
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-700">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="#" @click.prevent="activeProject = {{ json_encode($project) }}" class="block">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="mt-3 text-base text-gray-600 leading-relaxed">
                                        {{ Str::limit($project->description, 100) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-100">
                                <button @click="activeProject = {{ json_encode($project) }}" class="inline-flex items-center text-base font-semibold text-indigo-600 hover:text-indigo-700 group-hover:gap-2 transition-all">
                                    View Details
                                    <svg class="w-5 h-5 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div x-show="activeProject" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;">
            <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:p-0">
                <div x-show="activeProject" @click="activeProject = null" class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" aria-hidden="true"></div>

                <div x-show="activeProject" class="inline-block align-bottom bg-white rounded-2xl px-4 pt-5 pb-4 text-left overflow-hidden shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full sm:p-8">
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button @click="activeProject = null" type="button" class="bg-white rounded-full p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full">
                        <h3 class="text-3xl font-bold text-gray-900 mb-6" id="modal-title" x-text="activeProject?.title"></h3>

                        <img :src="activeProject?.image_url || 'https://via.placeholder.com/400x300'" alt="" class="w-full h-80 object-cover rounded-xl mb-6 shadow-md">

                        <div class="bg-indigo-50 rounded-xl p-6 mb-6">
                            <h4 class="text-lg font-bold text-gray-900 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                                </svg>
                                Tech Stack
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="tag in activeProject?.tags" :key="tag">
                                    <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-semibold bg-white text-indigo-700 shadow-sm" x-text="tag"></span>
                                </template>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-lg font-bold text-gray-900 mb-3">Description</h4>
                            <p class="text-base text-gray-700 leading-relaxed" x-text="activeProject?.description"></p>
                        </div>

                        <div x-show="activeProject?.link">
                            <a :href="activeProject?.link" target="_blank" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-md text-white bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/>
                                    <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/>
                                </svg>
                                View on GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
