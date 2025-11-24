@extends('components.layout')

@section('title', 'Projects - My Portfolio')

@section('content')
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    All Projects
                </h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    A collection of my work, side projects, and experiments.
                </p>
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($projects as $project)
                    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                        <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="{{ $project->image_url ?? 'https://via.placeholder.com/400x300' }}" alt="{{ $project->title }}">
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
                                <a href="{{ $project->link ?? '#' }}" class="block mt-2">
                                    <p class="text-xl font-semibold text-gray-900">
                                        {{ $project->title }}
                                    </p>
                                    <p class="mt-3 text-base text-gray-500">
                                        {{ $project->description }}
                                    </p>
                                </a>
                            </div>
                            <div class="mt-6 flex items-center">
                                <div class="flex-shrink-0">
                                    <a href="{{ $project->link ?? '#' }}" class="text-base font-semibold text-indigo-600 hover:text-indigo-500">
                                        View Project &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
