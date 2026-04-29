@extends('layouts.app')

@section('title', 'Editar tarea')

@section('content')
    <section class="panel">
        <div class="page-heading">
            <h2>Editar tarea</h2>
        </div>

        @include('tareas._form', [
            'action' => route('tareas.update', $tarea->id),
            'method' => 'PUT',
            'submitText' => 'Actualizar tarea',
        ])
    </section>
@endsection
