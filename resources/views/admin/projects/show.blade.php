@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>
                Project: {{ $project->id }} -- {{ $project->name }}
            </h1>
            <h4>
                @foreach ($project->technologies as $technology)
                    {{ $technology->name }}, version {{ $technology->version }} <br>
                @endforeach
            </h4>
            <h5>
                Created by: {{ $project->user->name }}
            </h5>

            <h6>
                Student of: {{ $project->user->studentDetail->class }}
            </h6>
            <h6>
                With an average of: {{ $project->user->studentDetail->average_vote }}
            </h6>
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
