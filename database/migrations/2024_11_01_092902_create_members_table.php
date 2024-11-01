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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('color');
            $table->unsignedBigInteger('breed_id');
            $table->unsignedBigInteger('master_id');
            $table->enum('status', ['подтвержден', 'заявлен'])->default('заявлен');
            $table->timestamps();

            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('master_id')->references('id')->on('masters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
