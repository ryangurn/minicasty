@extends('layouts.app')

@section('content')
    @if(!$page->getContents->isEmpty())
        @foreach($page->getContents as $content)
    <livewire:content-display :content="$content"/>
        @endforeach
    @endif
@endsection