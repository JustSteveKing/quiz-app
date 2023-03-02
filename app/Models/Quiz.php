<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\QuizStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Quiz extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
    ];

    protected $casts = [
        'status' => QuizStatus::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function questions(): HasMany
    {
        return $this->hasMany(
            related: Question::class,
            foreignKey: 'quiz_id',
        );
    }
}
