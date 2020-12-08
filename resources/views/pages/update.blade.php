@extends('layouts.app')

@section('content')
    <livewire:page-update :page="$page"/>
    <livewire:page-delete :page="$page"/>
@endsection