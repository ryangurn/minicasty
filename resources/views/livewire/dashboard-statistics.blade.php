<div id="wrapper" class="max-w-7xl px-4 py-4 mx-auto">
    <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-4">
        <div id="jh-stats-positive" class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
            <div>
                <p class="text-3xl font-semibold text-center text-green-800">{{ $episodes }}</p>
                <p class="text-lg text-center text-green-500">Episodes</p>
            </div>
        </div>

        <div id="jh-stats-negative" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
            <div>
                <p class="text-3xl font-semibold text-center text-purple-800">{{ $pages }}</p>
                <p class="text-lg text-center text-purple-500">Pages</p>
            </div>
        </div>

        <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
            <div>
                <p class="text-3xl font-semibold text-center text-red-800">{{ $listens }}</p>
                <p class="text-lg text-center text-red-500">Listens</p>
            </div>
        </div>

        <div id="jh-stats-neutral" class="flex flex-col justify-center px-4 py-4 mt-4 bg-white border border-gray-300 rounded sm:mt-0">
            <div>
                <p class="text-3xl font-semibold text-center text-indigo-800">{{ $views }}</p>
                <p class="text-lg text-center text-indigo-500">Page Views</p>
            </div>
        </div>
    </div>
</div>