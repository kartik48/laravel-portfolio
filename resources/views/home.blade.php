@extends('components.layout')

@section('title', 'Home - My Portfolio')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-black bg-grid overflow-hidden border-b-2 border-red-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-24 lg:py-32">
            <div class="text-center">
                <p class="font-display text-2xl text-gray-500 mb-2">&gt; whoami</p>
                <h1 class="font-display text-6xl tracking-wide text-gray-100 sm:text-7xl md:text-8xl">
                    <span class="block">Hi, I am</span>
                    <span class="block text-red-500 text-glow">Kartik<span class="terminal-cursor">_</span></span>
                </h1>
                <p class="mt-6 max-w-3xl mx-auto text-lg sm:text-xl text-gray-400 leading-relaxed">
                    An analyst and engineer working across data, software, and AI. My background spans data analysis, business analysis, and web development with Python, SQL, and Laravel/PHP, and I'm now focused on using AI across development, analysis, and building data pipelines.
                </p>
                <p class="mt-4 max-w-2xl mx-auto text-base sm:text-lg text-gray-500">
                    Curious and hands-on, I like starting with the data, then building the dashboards, agents, and applications that make it useful.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="{{ route('projects.index') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider text-black bg-red-600 hover:bg-red-500 border-2 border-red-400 shadow-[4px_4px_0_0_rgba(220,38,38,0.5)] transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-base font-bold uppercase tracking-wider text-gray-300 bg-transparent hover:text-red-400 border-2 border-gray-700 hover:border-red-600 transition-colors">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects Section -->
    <div class="bg-black py-20" x-data="{ activeProject: null }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="font-display text-xl text-gray-500 mb-1">&gt; ls ./featured-projects</p>
                <h2 class="font-display text-5xl tracking-wide text-gray-100 sm:text-6xl">
                    Featured <span class="text-red-500">Projects</span>
                </h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                    Check out some of my recent work.
                </p>
            </div>
            <div class="grid gap-8 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <div class="group flex flex-col bg-neutral-900 border-2 border-gray-700 hover:border-red-600 overflow-hidden transition-colors duration-200">
                        <div class="bg-neutral-950 border-b border-gray-800 px-3 py-1.5 flex items-center gap-1.5">
                            <span class="h-2 w-2 rounded-full bg-red-600"></span>
                            <span class="h-2 w-2 rounded-full bg-gray-600"></span>
                            <span class="h-2 w-2 rounded-full bg-gray-700"></span>
                        </div>
                        <div class="flex-shrink-0 relative overflow-hidden">
                            <img class="h-56 w-full object-cover grayscale-[30%] group-hover:grayscale-0 transition-all duration-300" src="{{ $project->thumbnail_url ?? 'https://placehold.co/400x300' }}" alt="{{ $project->title }}">
                            <div class="absolute inset-0 bg-red-900/0 group-hover:bg-red-900/10 transition-colors duration-300"></div>
                        </div>
                        <div class="flex-1 p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    @if($project->tags)
                                        @foreach($project->tags as $tag)
                                            <span class="inline-flex items-center px-2 py-0.5 text-xs border border-gray-700 text-red-400">
                                                [{{ $tag }}]
                                            </span>
                                        @endforeach
                                    @endif
                                </div>
                                <a href="#" @click.prevent="activeProject = {{ json_encode($project) }}" class="block">
                                    <h3 class="font-display text-2xl tracking-wide text-gray-100 group-hover:text-red-400 transition-colors">
                                        {{ $project->title }}
                                    </h3>
                                    <p class="mt-3 text-sm text-gray-400 leading-relaxed">
                                        {{ Str::limit($project->description, 100) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 pt-4 border-t border-gray-800">
                                <button @click="activeProject = {{ json_encode($project) }}" class="inline-flex items-center text-sm font-bold uppercase tracking-wider text-red-500 hover:text-red-400 group-hover:gap-2 transition-all">
                                    View Details
                                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                <div x-show="activeProject" @click="activeProject = null" class="fixed inset-0 bg-black bg-opacity-85 transition-opacity" aria-hidden="true"></div>

                <div x-show="activeProject" class="inline-block align-bottom bg-neutral-900 border-2 border-red-700 text-left overflow-hidden shadow-[8px_8px_0_0_rgba(220,38,38,0.4)] transform transition-all sm:my-8 sm:align-middle sm:max-w-5xl sm:w-full">
                    <div class="bg-neutral-950 border-b border-gray-800 px-4 py-2 flex items-center justify-between">
                        <div class="flex items-center gap-1.5">
                            <span class="h-2.5 w-2.5 rounded-full bg-red-600"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-gray-600"></span>
                            <span class="h-2.5 w-2.5 rounded-full bg-gray-700"></span>
                        </div>
                        <button @click="activeProject = null" type="button" class="text-gray-500 hover:text-red-500 transition-colors">
                            <span class="sr-only">Close</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="w-full p-6 sm:p-8">
                        <h3 class="font-display text-4xl tracking-wide text-red-500 mb-6" id="modal-title" x-text="activeProject?.title"></h3>

                        <img :src="activeProject?.image_url || 'https://placehold.co/400x300'" alt="" class="w-full h-80 object-cover border-2 border-gray-800 mb-6">

                        <div class="border border-gray-800 bg-black p-6 mb-6">
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-3 flex items-center">
                                <svg class="w-4 h-4 mr-2 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z"/>
                                </svg>
                                Tech Stack
                            </h4>
                            <div class="flex flex-wrap gap-2">
                                <template x-for="tag in activeProject?.tags" :key="tag">
                                    <span class="inline-flex items-center px-2 py-1 text-sm border border-gray-700 text-red-400" x-text="'[' + tag + ']'"></span>
                                </template>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-100 mb-3">Description</h4>
                            <p class="text-base text-gray-400 leading-relaxed whitespace-pre-line" x-text="activeProject?.description"></p>
                        </div>

                        <div x-show="activeProject?.link">
                            <a :href="activeProject?.link" target="_blank" class="inline-flex items-center px-6 py-3 text-base font-bold uppercase tracking-wider text-black bg-red-600 hover:bg-red-500 border-2 border-red-400 transition-colors">
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
