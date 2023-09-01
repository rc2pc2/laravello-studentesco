@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>
                Project: {{ $project->id }} -- {{ $project->name }}
            </h1>
            <p>
                {{ $project->description }}
            </p>

            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-xl btn-danger me-2">Delete this project</button>
            </form>


        </div>
    </div>
</div>
@endsection
