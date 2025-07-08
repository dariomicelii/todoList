@extends('layouts.index')

@section('title', 'Modifica Attività')

@section('content')
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label" style="color: white;">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label" style="color: white;">Data</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $task->date }}" required>
        </div>

        <div class="mb-3">
            <label for="note" class="form-label" style="color: white;">Descrizione</label>
            <textarea class="form-control" id="note" name="note" rows="3" required>{{ $task->note }}</textarea>
        </div>

        <div class="mb-3">
            <label for="priority" class="form-label" style="color: white;">Priorità</label>
            <select class="form-select" id="priority" name="priority_id" required>
                @foreach ($priorities as $priority)
                    <option value="{{ $priority->id }}" {{ $task->priority_id === $priority->id ? 'selected' : '' }}>
                        {{ $priority->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Aggiorna Attività">
    </form>
@endsection
