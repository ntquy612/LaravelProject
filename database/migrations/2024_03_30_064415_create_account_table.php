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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->foreignId('roleId')->constrained('role');
            $table->string("name");
            $table->date('birthday');
            $table->string("email");
            $table->string("phoneNumber");
            $table->string("avatar");
            $table->boolean("gender")->default(0);
            $table->string("password");
            $table->boolean('isDeleted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
