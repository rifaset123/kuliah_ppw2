<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dataMahasiswa>
 */
class dataMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // isikan dummy yang diinginkan
            'nama' => $this->faker->name(), //nama akan dibuatkan dummy
            'email' => $this->faker->unique()->safeEmail(), //email akan dibuatkan otomatis
            'perguruan_tinggi' => 'Universitas Gadjah Mada'
        ];
    }
}
