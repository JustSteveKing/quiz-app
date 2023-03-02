<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

final class Quiz extends Component
{
    public Model $quiz;

    public int $current = 0;

    public function next(): void
    {
        ++$this->current;
    }

    public function getQuestionProperty(): object|array
    {
        return $this->quiz->questions->toArray()[$this->current];
    }

    public function render(): View
    {
        return view('livewire.quiz');
    }
}
