<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mini_experience_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 60);
            $table->string('last_name', 60)->nullable();
            $table->string('full_name', 120);
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('education_level', 120)->nullable();
            $table->text('description');
            $table->json('checked_assertions');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mini_experience_profiles');
    }
};
