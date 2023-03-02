<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Entry;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

final class AnswerFactory extends Factory
{
    protected $model = Answer::class;

    public function definition(): array
    {
        return [
            'value' => $this->faker->word(),
            'correct' => $this->faker->boolean(),
            'entry_id' => Entry::factory(),
            'question_id' => Question::factory(),
        ];
    }
}
