<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">{{ $content->header }}</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                {{ $content->subtitle }}
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                {!! str_replace("<h1>", "<h1 class=\"text-9xl\">", str_replace("<h2>", "<h1 class=\"text-8xl\">", str_replace("<h3>", "<h1 class=\"text-7xl\">", str_replace("<h4>", "<h1 class=\"text-6xl\">", str_replace("<h5>", "<h1 class=\"text-5xl\">",$content->content))))) !!}
            </p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</div>