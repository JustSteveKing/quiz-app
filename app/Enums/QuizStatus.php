<?php

declare(strict_types=1);

namespace App\Enums;

enum QuizStatus: string
{
    case DRAFT = 'draft';
    case OPEN = 'open';
    case IN_PROGRESS = 'in-progress';
    case CLOSED = 'closed';
}
