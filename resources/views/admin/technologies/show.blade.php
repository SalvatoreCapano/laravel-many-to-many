@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                @include('partials.success')

                <h1>
                    {{ $technology->name }}
                </h1>
                <h6>
                    Slug: {{ $technology->slug }}
                </h6>

                <h2>
                    Articoli associati ({{ $technology->projects()->count() }})
                </h2>
                @if ($technology->projects()->count() > 0)
                    <ul>
                        @foreach ($technology->projects as $project)
                        <li>
                            <a href="{{ route('admin.projects.show', $project->id) }}">
                                {{ $project->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                @else
                    <h3>
                        Nessun progetto associato
                    </h3>
                @endif
            </div>
        </div>
    </div>
@endsection