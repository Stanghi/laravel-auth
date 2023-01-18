@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <img src="{{ $project->cover_image }}" alt="{{ $project->title }}">
        <p>Client name: {{ $project->client_name }}</p>
        <p>{{ $project->summary }}</p>
    </div>
@endsection
