<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Answer extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'value',
        'correct',
        'entry_id',
        'question_id',
    ];

    protected $casts = [
        'correct' => 'boolean',
    ];

    public function entry(): BelongsTo
    {
        return $this->belongsTo(
            related: Entry::class,
            foreignKey: 'entry_id',
        );
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(
            related: Question::class,
            foreignKey: 'question_id',
        );
    }
}
