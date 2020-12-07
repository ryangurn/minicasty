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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">update itunes information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        this is the area that allows you to update the itunes information for the episode.
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
                                    <label for="title" class="block text-sm font-medium text-gray-700">itunes title</label>
                                    <input wire:model="title" type="text" name="title" class="@error('title') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('title') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="episode_number" class="block text-sm font-medium text-gray-700">episode number</label>
                                    <input wire:model="episode_number" type="text" name="episode_number" class="@error('episode_number') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('episode_number') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="season_number" class="block text-sm font-medium text-gray-700">season number</label>
                                    <input wire:model="season_number" type="text" name="season_number" class="@error('season_number') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('season_number') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="type" class="block text-sm font-medium text-gray-700">type</label>
                                    <select wire:model="type" name="type" class="@error('season_number') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                        <option value="0">trailer</option>
                                        <option value="1">full</option>
                                        <option value="2">bonus</option>
                                    </select>
                                    @error('type') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="block" class="block text-sm font-medium text-gray-700">block</label>
                                    <select wire:model="block" name="block" class="@error('block') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                        <option value="0">unblocked</option>
                                        <option value="1">blocked</option>
                                    </select>
                                    @error('block') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>