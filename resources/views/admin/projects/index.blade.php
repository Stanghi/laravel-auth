@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
    <div class="container">

        <h1 class="my-5">Projects</h1>

        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
            @foreach ($projects as $project)
                <div class="col p-3">
                    <div class="card">
                        <img src="{{ $project->cover_image }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text fw-bold">{{ $project->title }}</p>

                            <div class="d-flex justify-content-around">

                                <a href="{{ route('admin.projects.show', $project) }}" title="Show"
                                    class="btn btn-outline-primary">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="#" title="Edit" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-pen"></i>
                                </a>

                                @include('admin.partials.form-delete', ['project' => $project])

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center"> {{ $projects->links() }} </div>

    </div>
@endsection
