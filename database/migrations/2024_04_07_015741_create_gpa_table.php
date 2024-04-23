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
        Schema::create('gpa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grado_id')->unsigned();            
            $table->foreign('grado_id')->references('id')->on('grado')->onDelete('cascade');
            $table->unsignedBigInteger('semana_id')->unsigned();            
            $table->foreign('semana_id')->references('id')->on('semana')->onDelete('cascade');
            $table->unsignedBigInteger('area_id')->unsigned();            
            $table->foreign('area_id')->references('id')->on('area')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->unsigned();            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpa');
    }
};
