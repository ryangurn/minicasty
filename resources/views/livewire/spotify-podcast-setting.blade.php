<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">spotify podcast settings</h3>
                <p class="mt-1 text-sm text-gray-600">
                    here you can specify spotify specific podcast settings. these settings are pretty much exclusive to spotify and not really used by other providers as far as i can see, unless they are owned by spotify.
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

                            <div class="col-span-6 sm:col-span-4">
                                <label for="spotify_country" class="block text-sm font-medium text-gray-700">spotify country restriction</label>
                                <select wire:model="spotify_country" name="spotify_country" multiple class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('spotify_country') mb-4 @enderror ">
                                    @if (isset($countries) && !$countries->isEmpty())
                                        @foreach($countries as $country)
                                            <option value="{{ $country->guid }}">{{ $country->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('spotify_country') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="spotify_origin" class="block text-sm font-medium text-gray-700">spotify country of origin</label>
                                <select wire:model="spotify_origin" name="spotify_origin" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('spotify_origin') mb-4 @enderror ">
                                    @if (isset($countries) && !$countries->isEmpty())
                                        @foreach($countries as $country)
                                            <option value="{{ $country->guid }}">{{ $country->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('spotify_origin') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="spotify_limit" class="block text-sm font-medium text-gray-700">episode limit</label>
                                <input wire:model="spotify_limit" type="text" name="spotify_limit" class="border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2 @error('spotify_limit') mb-4 @enderror ">
                                @error('spotify_limit') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
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