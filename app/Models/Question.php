<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\QuestionType;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Question extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'type',
        'content',
        'order',
        'options',
        'quiz_id',
    ];

    protected $casts = [
        'type' => QuestionType::class,
        'options' => AsCollection::class,
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(
            related: Quiz::class,
            foreignKey: 'quiz_id',
        );
    }
}
