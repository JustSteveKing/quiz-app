<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Entry;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

final class EntryFactory extends Factory
{
    protected $model = Entry::class;

    public function definition(): array
    {
        return [
            'completed' => $this->faker->boolean(),
            'user_id' => User::factory(),
            'quiz_id' => Quiz::factory(),
        ];
    }
}
