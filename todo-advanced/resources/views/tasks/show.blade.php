@extends('layouts.show')

@section('title', 'Dettagli Attività')

@section('content')
<div class="d-flex flex-column align-items-center justify-content-center text-center" >

  <h3 style="color: white;">{{ $task->title }}</h3>
  <p style="color: white;">{{ $task->note }}</p>
  <div class="d-flex py-4 gap-2">
      <a href="{{ route('tasks.edit', $task) }}" class="btn btn-secondary">Modifica Attività</a>
      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Elimina
      </button>
  </div>
  <a href="{{ route('tasks.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i></a></a>

</div>  


    <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina l'attività</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare l'attività {{ $task->title }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{ route('tasks.destroy', $task) }}" method="POST">
            @csrf
            @method('DELETE')
        <input type="submit" class="btn btn-outline-danger" value="Elimina definitivamente">
    </form>
      </div>
    </div>
  </div>
</div>

@endsection 
