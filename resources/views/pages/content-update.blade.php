@extends('layouts.app')

@section('content')
    <livewire:content-update :con="$content"/>
    <livewire:content-delete :content="$content"/>
@endsection