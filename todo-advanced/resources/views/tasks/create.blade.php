@extends('layouts.index')

@section('title', 'Aggiungi Nuova Attività')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label" style="color: white;">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label" style="color: white;">Data</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="note" class="form-label" style="color: white;">Descrizione</label>
            <textarea class="form-control" id="note" name="note" rows="3" required></textarea>
        </div>

        <div>
            <label for="priority" class="form-label" style="color: white;">Priorità</label>
            <select class="form-select" id="priority" name="priority_id" required>
                @foreach ($priorities as $priority)
                    <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" class="btn btn-primary" value="Aggiungi Nuova Attività">
    </form>
@endsection