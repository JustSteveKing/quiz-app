<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\QuizStatus;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

final class QuizFactory extends Factory
{
    protected $model = Quiz::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => Arr::random(QuizStatus::cases()),
            'user_id' => User::factory(),
        ];
    }
}
