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
        Schema::create('exams', function (Blueprint $table) {
            $table->id();

            $table->string('exam_code')->unique();
            $table->string('name');
            
            $table->enum('exam_type',[
                'midterm',
                'final',
                'quiz',
                'other',
            ]);
            $table->string('academic_year');
            $table->date('start_date');
            $table->date('end_date')->nullable();

            $table->text('description')->nullable();

            $table->enum('status', [
                'upcoming',
                'ongoing',
                'completed',
                'cancelled',
            ])->default('upcoming');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
