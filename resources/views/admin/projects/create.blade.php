@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')
<section>
    <div class="container">
        <h2>Create a new project</h2>
        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" minlength="3" maxlength="200" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div id="titleHelp" class="form-text">Inserire minimo 3 caratteri e massimo 200</div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="url" class="form-control @error('image') is-invalid @enderror" id="image" name="image"
                    value="{{ old('image') }}" maxlength="255">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('desscription') is-invalid @enderror" id="description"
                    name="description" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-danger">Create</button>
                <button type="reset" class="btn btn-secondary">Reset</button>

            </div>
        </form>
    </div>

</section>


@endsection