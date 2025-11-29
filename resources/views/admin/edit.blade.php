@extends('components.layout')

@section('title', 'Edit Project')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="md:flex md:items-center md:justify-between mb-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Edit Project: {{ $project->title }}
            </h2>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" value="{{ $project->title }}" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <div class="mt-1">
                        <select id="category" name="category" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option value="development" {{ $project->category == 'development' ? 'selected' : '' }}>Development</option>
                            <option value="data" {{ $project->category == 'data' ? 'selected' : '' }}>Data</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md">{{ $project->description }}</textarea>
                    </div>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Image URL</label>
                    <div class="mt-1">
                        <input type="url" name="image" id="image" value="{{ $project->image }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div>
                    <label for="link" class="block text-sm font-medium text-gray-700">Project Link</label>
                    <div class="mt-1">
                        <input type="url" name="link" id="link" value="{{ $project->link }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div>
                    <label for="tags" class="block text-sm font-medium text-gray-700">Tags (comma separated)</label>
                    <div class="mt-1">
                        <input type="text" name="tags" id="tags" value="{{ $project->tags ? implode(', ', $project->tags) : '' }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('admin.dashboard') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-3">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
