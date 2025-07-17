<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TacGia;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TacGiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = TacGia::class;

    public function definition(): array
    {
        return [
            'TenTG' => $this->faker->name,
            'QuocTich' => $this->faker->country,
        ];
    }
}
