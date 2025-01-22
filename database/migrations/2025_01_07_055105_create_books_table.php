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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stu_id');
            $table->foreign('stu_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            // ->onDelete('set null'); // if you want to set null on delete
            // $table->foreignld('stu_id')->constrained('students');
            // $table->unsignedBiglnteger('student_id');
            // $table->foreignld('student_id')->constrained ();
            // $table->foreignld('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDe1ete();
            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
