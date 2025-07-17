<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ThanhVien;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class ThanhVienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ThanhVien::class;

    public function definition(): array
    {
        return [
            'HoTen' => $this->faker->name,
            'DiaChi' => $this->faker->address,
            'SoDienThoai' => $this->faker->phoneNumber,
        ];
    }
}
