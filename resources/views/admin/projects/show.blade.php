@extends('layouts.app')

@section('title')
    | Admin Project-Show
@endsection

@section('content')
    <div class="container">

        @include('admin.partials.action-in-page')

        <img src="{{ $project->cover_image }}" alt="{{ $project->title }}">
        <p>Client name: {{ $project->client_name }}</p>
        <p>{{ $project->summary }}</p>
    </div>
@endsection
