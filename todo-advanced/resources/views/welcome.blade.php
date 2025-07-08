@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <div class="logo_myagenda">
            <svg viewBox="0 0 300 80" xmlns="http://www.w3.org/2000/svg" style="width: 450px">
                <style>
                .text-main { fill: #2c3e50; font-weight: bold; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
                .text-highlight { fill: #3498db; }
                </style>
                <text x="0" y="55" font-size="48" class="text-main">
                My<tspan class="text-highlight">Agenda</tspan>
                </text>
            </svg>
        </div>

        <h1 class="display-5 fw-bold">
            Benvenuto su MyAgenda <i class="bi bi-box"></i>
        </h1>

        <p class="col-md-8 fs-4">
            MyAgenda è una web app semplice e intuitiva per gestire attività, appuntamenti e scadenze in modo organizzato e veloce. Ideale per utenti che cercano un'agenda digitale sempre accessibile.
        </p>
        <a href="http://127.0.0.1:8000/tasks" class="btn btn-primary btn-lg" type="button">Inizia subito</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection