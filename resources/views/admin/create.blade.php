@extends('components.layout')

@section('title', 'Add New Project')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="md:flex md:items-center md:justify-between mb-8">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Add New Project
            </h2>
        </div>
    </div>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg p-6">
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <div class="mt-1">
                        <input type="text" name="title" id="title" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                    <div class="mt-1">
                        <select id="category" name="category" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            <option value="development">Development</option>
                            <option value="data">Data</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <div class="mt-1">
                        <textarea id="description" name="description" rows="3" required class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>

                <div>
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail URL or Path</label>
                    <div class="mt-1">
                        <input type="text" name="thumbnail" id="thumbnail" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://example.com/thumbnail.png or images/thumb.png">
                    </div>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Detail Image URL or Path (Optional)</label>
                    <div class="mt-1">
                        <input type="text" name="image" id="image" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://example.com/image.png or images/detail.png">
                        <p class="mt-1 text-sm text-gray-500">If left blank, the thumbnail will be used.</p>
                    </div>
                </div>

                <div>
                    <label for="link" class="block text-sm font-medium text-gray-700">Project Link</label>
                    <div class="mt-1">
                        <input type="text" name="link" id="link" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="https://example.com">
                    </div>
                </div>

                <div>
                    <label for="tags" class="block text-sm font-medium text-gray-700">Tags (comma separated)</label>
                    <div class="mt-1">
                        <input type="text" name="tags" id="tags" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Laravel, Tailwind, Vue">
                    </div>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('admin.dashboard') }}" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-3">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
