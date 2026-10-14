<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->default('Siswa PPLG');
            $table->integer('score');
            $table->integer('correct_count');
            $table->integer('incorrect_count');
            $table->integer('total_questions');
            $table->integer('xp_earned');
            $table->boolean('passed');
            $table->json('answers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
