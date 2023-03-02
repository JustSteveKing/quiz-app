<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Entry extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'completed',
        'user_id',
        'quiz_id',
    ];

    protected $casts = [
        'completed' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(
            related: Quiz::class,
            foreignKey: 'quiz_id',
        );
    }
}
