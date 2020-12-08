@extends('layouts.app')

@section('content')
    <livewire:content-list :page="$page"/>
    <livewire:content-add :page="$page"/>
@endsection