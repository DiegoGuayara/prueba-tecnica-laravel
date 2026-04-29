@extends('layouts.app')

@section('title', 'Mis Tareas')

@section('content')
    <section class="panel">
        <div class="page-heading">
            <h2>Listado de tareas</h2>
            <a class="button" href="{{ route('tareas.create') }}">Crear tarea</a>
        </div>

        @if ($tareas->isEmpty())
            <p class="empty">No hay tareas registradas.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Prioridad</th>
                        <th>Estado</th>
                        <th>Fecha límite</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tareas as $tarea)
                        <tr class="{{ $tarea->completada ? 'completed' : '' }}">
                            <td>
                                <div class="task-title">{{ $tarea->titulo }}</div>
                                @if ($tarea->descripcion)
                                    <div class="task-description">{{ $tarea->descripcion }}</div>
                                @endif
                            </td>
                            <td>
                                <span class="badge badge-{{ $tarea->prioridad }}">
                                    {{ $tarea->prioridad }}
                                </span>
                            </td>
                            <td>{{ $tarea->completada ? '✓ Completada' : 'Pendiente' }}</td>
                            <td>{{ $tarea->fecha_limite ? $tarea->fecha_limite->format('Y-m-d') : 'Sin fecha' }}</td>
                            <td>
                                <div class="actions">
                                    <form class="inline-form" action="{{ route('tareas.toggle', $tarea->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button class="success" type="submit">
                                            {{ $tarea->completada ? 'Marcar pendiente' : 'Completar' }}
                                        </button>
                                    </form>

                                    <a class="button secondary" href="{{ route('tareas.edit', $tarea->id) }}">Editar</a>

                                    <form
                                        class="inline-form"
                                        action="{{ route('tareas.destroy', $tarea->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('¿Seguro que deseas eliminar esta tarea?')"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button class="danger" type="submit">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
@endsection
