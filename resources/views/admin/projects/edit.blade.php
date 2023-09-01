@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('admin.projects.update', $project ) }}" method="POST">
            @csrf
            @method('PUT')

            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label class="form-label" for="name">Project name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $project->name) }}" class="form-control">
            </div>

            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-4">
                <label class="form-label" for="description">Project description</label>
                <textarea type="text" name="description" id="description" class="form-control" >
                    {{ old('description', $project->description) }}
                </textarea>
            </div>

            <div class="mb-4">
                <button type="submit" class="btn btn-xl btn-primary me-2">Create new project</button>
                <button type="reset" class="btn btn-xl btn-warning">Reset all fields</button>

            </div>

        </form>
    </div>
</div>
@endsection
