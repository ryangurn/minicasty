@extends('layouts.app')

@section('content')
	<div class="bg-gray-50 w-auto ">
		<div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
			<h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
				mini[casty]
				<br>
				<div>
					<span class="block text-indigo-600">time to get podding!</span>
					<span class="block text-indigo-900 text-xs">Please make sure to use firefox or chrome, safari has some issues.</span>
				</div>
			</h2>
			<div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
				<div class="inline-flex rounded-md shadow">
					<a href="{{ route('dashboard') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
						go to dashboard
					</a>
				</div>
				<div class="ml-3 inline-flex rounded-md shadow">
					<a href="http://github.com/ryangurn/minicasty" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
						github repo
					</a>
				</div>
			</div>
		</div>
	</div>
@endsection