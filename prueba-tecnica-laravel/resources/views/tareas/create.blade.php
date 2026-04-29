@extends('layouts.app')

@section('title', 'Crear tarea')

@section('content')
    <section class="panel">
        <div class="page-heading">
            <h2>Crear tarea</h2>
        </div>

        @include('tareas._form', [
            'action' => route('tareas.store'),
            'method' => 'POST',
            'submitText' => 'Guardar tarea',
        ])
    </section>
@endsection
