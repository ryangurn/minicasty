<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">update page</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        here you can update the page for a specific page, mainly simple metadata.
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit.prevent="save">
                    {{ csrf_field() }}
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                @if (session()->has('saved'))
                                    <div class="mb-4 col-span-6 sm:col-span-4">
                                        <span class="mb-4 pt-2 pb-2 pl-4 pr-4 rounded-full text-green-700 bg-green-100">{{ strtolower(session('saved')) }}</span>
                                    </div>
                                @endif

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="title" class="block text-sm font-medium text-gray-700">title <span class="text-red-700">*</span></label>
                                    <input wire:model="title" type="text" name="title" class="@error('title') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('title') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="slug" class="block text-sm font-medium text-gray-700">slug <span class="text-red-700">*</span></label>
                                    <input wire:model="slug" type="text" name="slug" class="@error('slug') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('slug') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="episode" class="block text-sm font-medium text-gray-700">episode <span class="text-red-700">*</span></label>
                                    <select wire:model="episode" @if (isset($e) && $e->isEmpty()) disabled @endif name="episode" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('episode') mb-4 @enderror ">
                                        @if (isset($e) && !$e->isEmpty())
                                            @foreach($e as $episode)
                                                <option value="{{ $episode->guid }}">{{ $episode->title }}</option>
                                            @endforeach
                                        @else
                                            <option>Nothing to create a page for.</option>
                                        @endif
                                    </select>
                                    @error('episode') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <div class="flex items-start @error('display_podcast') mb-4 @enderror">
                                        <div class="flex items-center h-5">
                                            <input wire:model="display_podcast" name="display_podcast" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="display_podcast" class="font-medium text-gray-700">display podcast</label>
                                        </div>
                                    </div>
                                    @error('display_podcast') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <div class="flex items-start @error('display_episode') mb-4 @enderror">
                                        <div class="flex items-center h-5">
                                            <input wire:model="display_episode" name="display_episode" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="display_episode" class="font-medium text-gray-700">display episode</label>
                                        </div>
                                    </div>
                                    @error('display_episode') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>