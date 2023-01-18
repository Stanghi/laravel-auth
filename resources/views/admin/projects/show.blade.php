@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="d-flex align-items-center justify-content-between">
            <h1>{{ $project->title }}</h1>

            <div class="d-flex align-items-center">
                <a href="{{ route('admin.projects.edit', $project) }}" title="Edit" class="btn btn-outline-primary me-3">
                    <i class="fa-solid fa-pen"></i>
                </a>
                @include('admin.partials.form-delete', ['project' => $project])
            </div>

        </div>

        <img src="{{ $project->cover_image }}" alt="{{ $project->title }}">
        <p>Client name: {{ $project->client_name }}</p>
        <p>{{ $project->summary }}</p>
    </div>
@endsection
