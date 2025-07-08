@extends('layouts.index')

@section('title', 'Elenco Attività')

@section('content')

    <div class="container my-4">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary my-4">Crea Nuova Attività</a>
        <div class="row">
            @foreach ($tasks as $task)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ $task->title }}</h5>
                            <h6 class="card-subtitle mb-4 text-muted">{{ $task->date }}</h6>
                            <div class="my-4">
                                @if ($task->priority)
                                    <span class="badge text-white" style="background-color: {{ $task->priority->color }}">
                                        Priorità: {{ $task->priority->name }}
                                    </span>
                                @else
                                    <span class="badge text-bg-secondary">Nessuna priorità</span>
                                @endif
                            </div>

                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-primary">Vedi dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection