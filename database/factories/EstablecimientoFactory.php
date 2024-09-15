<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Establecimiento>
 */
class EstablecimientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre_establecimiento' => $this->faker->name(),
            'direccion_manzana' => $this->faker->name(),
            'direccion_calleprincipal' => $this->faker->name(),
            'direccion_numero' => $this->faker->name(),
            'direccion_transversal' => $this->faker->name(),
            'direccion_referencia' => $this->faker->name(),
            'nombre_administrador' => $this->faker->name(),
            'telefono_contacto' => $this->faker->numberBetween(1, 10),
            'email_contacto' => $this->faker->name(),
            'ubicacion' => $this->faker->name(),
            'ruta' => $this->faker->boolean(),
            'provincia_id' => $this->faker->unique()->uuid(),
            'ciudad_id' => $this->faker->unique()->uuid(),
            'cliente_id' => $this->faker->unique()->uuid(),
        ];
    }
}
