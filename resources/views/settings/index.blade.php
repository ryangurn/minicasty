@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">podcast settings</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        here you can specify information about your podcast, these are the podcast settings they you are able to modify. there are some specific to apple podcasts and or spotify podcasts. in general, spotify utilizes all of apple podcasts information but not the other way around.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="title" class="block text-sm font-medium text-gray-700">Title <span class="text-red-700">*</span></label>
                                    <input type="text" name="title" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="itunes-title" class="block text-sm font-medium text-gray-700">iTunes Title</label>
                                    <input type="text" name="itunes-title" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea name="description" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2"></textarea>
                                </div>

                                <div class="col-span-6 sm:col-span-3">


                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover photo
                                    </label>
                                    <div class="mt-2 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p class="text-sm text-gray-600">
                                                <button class="bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Upload a file
                                                </button>
                                                or drag and drop
                                            </p>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                                    @if (isset($env['languages']) && !$env['languages']->isEmpty())
                                    <select name="language" multiple class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        @foreach($env['languages'] as $language)
                                        <option value="{{ $language->guid }}">{{ $language->name }}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="categories" class="block text-sm font-medium text-gray-700">Categories</label>
                                    @if (isset($env['categories']) && !$env['categories']->isEmpty())
                                        <select name="categories" multiple class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            @foreach($env['categories'] as $category)
                                            <option value="{{ $category->guid }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input name="explicit" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="comments" class="font-medium text-gray-700">Explicit Content</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                                    <input type="text" name="author" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="link" class="block text-sm font-medium text-gray-700">
                                        Podcast Link
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                      <span class="inline-flex items-center px-3 rounded-l-md border-solid border-2 border-grey-light bg-gray-50 text-gray-500 text-sm">
                                        http://
                                      </span>
                                        <input type="text" name="link" class="border-solid border-2 border-grey-light focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300 p-2" placeholder="www.example.com">
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="owner-name" class="block text-sm font-medium text-gray-700">Owners Name</label>
                                    <input type="text" name="owner-name" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="owner-email" class="block text-sm font-medium text-gray-700">Owners Email</label>
                                    <input type="text" name="owner-email" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                </div>

                            </div>
                        </div>

                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

@endsection