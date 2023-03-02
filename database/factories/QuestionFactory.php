<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\QuestionType;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

final class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'type' => Arr::random(QuestionType::cases()),
            'content' => $this->faker->sentence(),
            'order' => $this->faker->numberBetween(
                0, 100,
            ),
            'options' => [],
            'quiz_id' => Quiz::factory(),
        ];
    }
}
