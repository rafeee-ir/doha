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
        Schema::create('pre_registers', function (Blueprint $table) {
            $table->id();
            $table->json('for')->nullable();
            $table->json('category')->nullable();
            $table->string('company')->nullable();
            $table->string('ceo')->nullable();
            $table->string('contact-person')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('site')->nullable();
            $table->text('description')->nullable();
            $table->string('url');
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_registers');
    }
};
