<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sach;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class SachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sach::class;

    public function definition(): array
    {
        return [
            'TieuDe' => $this->faker->sentence(6),
            'NamXuatBan' => $this->faker->numberBetween(1990, 2024),
            'MaTG' => $this->faker->numberBetween(1, 10),
        ];
    }
}
