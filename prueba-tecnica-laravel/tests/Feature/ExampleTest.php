<?php

namespace Tests\Feature;

use App\Models\Tarea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_inicio_redirige_al_listado_de_tareas(): void
    {
        $this->get('/')->assertRedirect(route('tareas.index'));
    }

    public function test_puede_crear_una_tarea(): void
    {
        $response = $this->post(route('tareas.store'), [
            'titulo' => 'Preparar entrevista',
            'descripcion' => 'Repasar el flujo MVC de Laravel.',
            'prioridad' => 'alta',
            'fecha_limite' => now()->addDay()->toDateString(),
        ]);

        $response
            ->assertRedirect(route('tareas.index'))
            ->assertSessionHas('success', 'Tarea creada correctamente.');

        $this->assertDatabaseHas('tareas', [
            'titulo' => 'Preparar entrevista',
            'prioridad' => 'alta',
            'completada' => false,
        ]);
    }

    public function test_rechaza_fecha_limite_pasada(): void
    {
        $response = $this
            ->from(route('tareas.create'))
            ->post(route('tareas.store'), [
                'titulo' => 'Tarea valida',
                'prioridad' => 'media',
                'fecha_limite' => now()->subDay()->toDateString(),
            ]);

        $response
            ->assertRedirect(route('tareas.create'))
            ->assertSessionHasErrors([
                'fecha_limite' => 'La fecha límite debe ser hoy o una fecha futura.',
            ]);
    }

    public function test_puede_marcar_tarea_como_completada(): void
    {
        $tarea = Tarea::create([
            'titulo' => 'Leer requerimientos',
            'prioridad' => 'baja',
        ]);

        $this->patch(route('tareas.toggle', $tarea->id))
            ->assertRedirect(route('tareas.index'));

        $this->assertTrue($tarea->fresh()->completada);
    }
}
