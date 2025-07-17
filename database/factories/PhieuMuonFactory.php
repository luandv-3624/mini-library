<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PhieuMuon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class PhieuMuonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PhieuMuon::class;

    public function definition(): array
    {
        return [
            'NgayMuon' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'NgayTra' => $this->faker->optional(0.7, null) // 70% có giá trị, 30% null
                            ->dateTimeBetween('now', '+1 month')
                            ?->format('Y-m-d'),
            'MaTV' => $this->faker->numberBetween(1, 30),  // Giả sử có 30 thành viên
            'MaSach' => $this->faker->numberBetween(1, 100), // Giả sử có 100 sách
        ];
    }
}
