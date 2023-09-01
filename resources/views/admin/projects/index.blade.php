@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>
                Projects index:
            </h1>

            @if (session('name'))
                <div class="alert alert-danger">
                    The project named <em>"{{ session('name') }}"</em> has been permanently deleted.
                </div>
            @endif

            <ul>
                @forelse ($projects as $project)
                    <li class="project-element">
                        <h3>
                            {{ $project->id }} ~~ {{ $project->name }}
                        </h3>
                        <p>
                            A project by <em>{{ $project->user->name }}</em>
                        </p>
                    </li>
                @empty
                    <li>
                        <h2>
                            No projects are available
                        </h2>
                    </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
