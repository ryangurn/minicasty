@extends('layouts.app')

@section('content')
    <livewire:episode-list :episodes="$episodes"/>
@endsection