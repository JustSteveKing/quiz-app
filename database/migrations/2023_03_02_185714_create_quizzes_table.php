<?php

declare(strict_types=1);

use App\Enums\QuizStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quizzes', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('name');
            $table->text('description')->nullable();

            $table->string('status')->default(QuizStatus::DRAFT->value);

            $table
                ->foreignUlid('user_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
