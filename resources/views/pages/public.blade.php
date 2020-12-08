@extends('layouts.app')

@section('content')
    @if ($page->display_podcast)
        <livewire:display-podcast />
    @endif

    @if ($page->display_episode)
        <livewire:display-episode :episode="$page->getEpisode" />
    @endif

    @if(!$page->getContents->isEmpty())
        @foreach($page->getContents as $content)
    <livewire:content-display :content="$content"/>
        @endforeach
    @endif
@endsection