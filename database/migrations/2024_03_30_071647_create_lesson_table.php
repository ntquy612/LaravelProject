<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('lesson', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courseId')->constrained('course');
            $table->string("name");
            $table->string("content");
            $table->string("videoURL");
            $table->boolean('isDeleted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson');
    }
};
