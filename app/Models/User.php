<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

final class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasUlids;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'role' => Role::class,
        'email_verified_at' => 'datetime',
    ];

    public function quizzes(): HasMany
    {
        return $this->hasMany(
            related: Quiz::class,
            foreignKey: 'user_id',
        );
    }

    public function entries(): HasMany
    {
        return $this->hasMany(
            related: Entry::class,
            foreignKey: 'user_id',
        );
    }
}
