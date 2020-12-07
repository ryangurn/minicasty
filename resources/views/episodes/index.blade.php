@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto pt-4 sm:px-6 lg:px-8">
        <a href="{{ route('create') }}" class="pt-2 pb-2 pl-4 pr-4 rounded-full text-green-700 bg-green-100">Add Episode</a>
    </div>
    <div>
        <livewire:episode-list :episodes="$episodes"/>
    </div>
@endsection