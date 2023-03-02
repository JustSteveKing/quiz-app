<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('entries', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->boolean('completed')->default(false);

            $table
                ->foreignUlid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table
                ->foreignUlid('quiz_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
