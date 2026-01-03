@extends('components.layout')

@section('title', 'Projects - My Portfolio')

@section('content')
    <div class="bg-white py-12" x-data="{ activeTab: 'development', activeProject: null }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    All Projects
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    A collection of my work, side projects, and experiments.
                </p>
            </div>

            <!-- Tabs -->
            <div class="mt-8 flex justify-center">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                        <button @click="activeTab = 'development'" 
                            :class="activeTab === 'development' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Development
                        </button>
                        <button @click="activeTab = 'data'" 
                            :class="activeTab === 'data' ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                            class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Data
                        </button>
                    </nav>
                </div>
            </div>

            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <div x-show="activeTab === '{{ $project->category }}'" class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ $project->thumbnail_url ?? 'https://via.placeholder.com/400x300' }}" alt="{{ $project->title }}">
                        </div>
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm font-medium text-indigo-600">
                                    @if($project->tags)
                                        @foreach($project->tags as $tag)
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800">
                                                {{ $tag }}
                                            </span>
                                        @endforeach
                                    @endif
                                </p>
                                <a href="#" @click.prevent="activeProject = {{ json_encode($project) }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $project->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ Str::limit($project->description, 100) }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <button @click="activeProject = {{ json_encode($project) }}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                        View Details &rarr;
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Modal -->
        <div x-show="activeProject" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div x-show="activeProject" @click="activeProject = null" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div x-show="activeProject" class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full sm:p-6">
                    <div class="hidden sm:block absolute top-0 right-0 pt-4 pr-4">
                        <button @click="activeProject = null" type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left w-full">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title" x-text="activeProject?.title"></h3>
                            <div class="mt-2">
                                <img :src="activeProject?.image_url || 'https://via.placeholder.com/400x300'" alt="" class="w-full h-96 object-cover rounded-md mb-4">
                                
                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-900">Tech Stack</h4>
                                    <div class="mt-2 flex flex-wrap gap-2">
                                        <template x-for="tag in activeProject?.tags" :key="tag">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800" x-text="tag"></span>
                                        </template>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h4 class="text-sm font-medium text-gray-900">Description</h4>
                                    <p class="mt-2 text-sm text-gray-500" x-text="activeProject?.description"></p>
                                </div>

                                <div class="mt-6" x-show="activeProject?.link">
                                    <a :href="activeProject?.link" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        View Project &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
