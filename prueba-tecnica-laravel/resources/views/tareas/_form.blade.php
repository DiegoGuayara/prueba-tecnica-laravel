@php
    $tarea = $tarea ?? null;
@endphp

<form action="{{ $action }}" method="POST" class="form-grid">
    @csrf

    @if ($method !== 'POST')
        @method($method)
    @endif

    <label>
        Título
        <input
            type="text"
            name="titulo"
            value="{{ old('titulo', $tarea->titulo ?? '') }}"
            maxlength="100"
            required
        >
    </label>

    <label>
        Descripción
        <textarea name="descripcion" maxlength="500">{{ old('descripcion', $tarea->descripcion ?? '') }}</textarea>
    </label>

    <label>
        Prioridad
        <select name="prioridad" required>
            @foreach (['baja' => 'Baja', 'media' => 'Media', 'alta' => 'Alta'] as $valor => $texto)
                <option
                    value="{{ $valor }}"
                    @selected(old('prioridad', $tarea->prioridad ?? 'media') === $valor)
                >
                    {{ $texto }}
                </option>
            @endforeach
        </select>
    </label>

    <label>
        Fecha límite
        <input
            type="date"
            name="fecha_limite"
            value="{{ old('fecha_limite', optional($tarea?->fecha_limite)->format('Y-m-d')) }}"
        >
    </label>

    <div class="actions">
        <a class="button secondary" href="{{ route('tareas.index') }}">Cancelar</a>
        <button type="submit">{{ $submitText }}</button>
    </div>
</form>
