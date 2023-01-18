@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger m-5" role="alert">
                <h2><i class="fa-solid fa-triangle-exclamation"></i>Error</h2>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    placeholder="Add title...">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input type="text" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image"
                    name="cover_image" placeholder="Add URL for image...">
                @error('cover_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="client_name" class="form-label">Client name *</label>
                <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name"
                    name="client_name" placeholder="Add client_name...">
                @error('client_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="summary" class="form-label">summary</label>
                <textarea class="form-control" id="summary" name="summary" value="{{ old('summary') }}" rows="5"
                    placeholder="Add summary..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit
                <i class="fa-solid fa-file-import ms-1"></i>
            </button>
        </form>
    </div>
@endsection