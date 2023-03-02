<?php

declare(strict_types=1);

use App\Enums\QuestionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', static function (Blueprint $table): void {
            $table->ulid('id')->primary();

            $table->string('type')->default(QuestionType::RADIO->value);
            $table->text('content');

            $table->json('options')->nullable();

            $table->unsignedBigInteger('order')->default(0);

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
        Schema::dropIfExists('questions');
    }
};
