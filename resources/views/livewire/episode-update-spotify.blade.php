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
                    <h3 class="text-lg font-medium leading-6 text-gray-900">update spotify information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        this is the area that allows you to update the spotify information for the episode.
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
                                    <label for="order" class="block text-sm font-medium text-gray-700">order</label>
                                    <input wire:model="order" type="text" name="order" class="@error('order') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('order') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="start" class="block text-sm font-medium text-gray-700">start</label>
                                    <input wire:model="start" type="text" name="start" class="@error('start') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('start') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="end" class="block text-sm font-medium text-gray-700">end</label>
                                    <input wire:model="end" type="text" name="end" class="@error('end') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('end') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="keywords" class="block text-sm font-medium text-gray-700">keywords</label>
                                    <input wire:model="keywords" type="text" name="keywords" class="@error('keywords') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                    @error('keywords') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="countries" class="block text-sm font-medium text-gray-700">countries</label>
                                    <select wire:model="countries" name="countries" multiple="multiple" class="@error('countries') mb-4 @enderror border-solid border-2 border-grey-light mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md p-2">
                                        @if(!$c->isEmpty())
                                            @foreach($c as $country)
                                        <option value="{{ $country->guid }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('countries') <span class="pt-2 pb-2 pl-4 pr-4 rounded-full text-red-700 bg-red-100">{{ strtolower($message) }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>