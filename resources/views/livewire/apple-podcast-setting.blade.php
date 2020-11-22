<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">apple podcast settings</h3>
                <p class="mt-1 text-sm text-gray-600">
                    here you can specify apple specific podcast settings. now saying that they are specific to itunes is misleading... spotify will also look at <i>some</i> of these settings however they are maintained and managed by apple, not anyone else.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="save">
                {{ csrf_field() }}
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label for="itunes_title" class="block text-sm font-medium text-gray-700">iTunes Title</label>
                                <input wire:model="itunes_title" type="text" name="itunes_title" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 @error('itunes_title') mb-4 @enderror ">
                                @error('itunes_title') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="itunes_type" class="block text-sm font-medium text-gray-700">Description</label>
                                <select wire:model="itunes_type" name="itunes_type" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('itunes_type') mb-4 @enderror ">
                                    <option value="episodic">Episodic</option>
                                    <option value="serial">Serial</option>
                                </select>
                                @error('itunes_type') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="copyright" class="block text-sm font-medium text-gray-700">Copyright</label>
                                <input wire:model="copyright" type="text" name="copyright" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 @error('copyright') mb-4 @enderror ">
                                @error('copyright') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="new_feed_url" class="block text-sm font-medium text-gray-700">New Feed URL</label>
                                <input wire:model="new_feed_url" type="text" name="new_feed_url" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 @error('new_feed_url') mb-4 @enderror ">
                                @error('new_feed_url') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <div class="flex items-start @error('itunes_block') mb-4 @enderror ">
                                    <div class="flex items-center h-5">
                                        <input wire:model="itunes_block" name="itunes_block" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="itunes_block" class="font-medium text-gray-700">Podcast Blocked</label>
                                    </div>
                                </div>
                                @error('itunes_block') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <div class="flex items-start @error('itunes_complete') mb-4 @enderror ">
                                    <div class="flex items-center h-5">
                                        <input wire:model="itunes_complete" name="itunes_complete" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="itunes_complete" class="font-medium text-gray-700">Podcast Completed</label>
                                    </div>
                                </div>
                                @error('itunes_complete') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ $message }}</span> @enderror
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