<?php

declare(strict_types=1);

namespace App\Http\Controllers\Quiz;

use App\Models\Quiz;
use Illuminate\Http\Request;

final class ShowController
{
    public function __invoke(Request $request)
    {
        return view(
            view: 'test',
            data: [
                'quiz' => Quiz::query()->with(['questions'])->first(),
            ]
        );
    }
}
