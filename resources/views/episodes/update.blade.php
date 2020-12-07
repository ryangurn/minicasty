@extends('layouts.app')

@section('content')
    <livewire:episode-update :episode="$episode"/>
    <livewire:episode-update-itunes :episode="$episode"/>
    <livewire:episode-update-spotify :episode="$episode"/>
    <livewire:episode-delete :episode="$episode"/>
@endsection