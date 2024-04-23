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
        Schema::create('cronograma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('unididactica_id')->unsigned();            
            $table->foreign('unididactica_id')->references('id')->on('unididactica')->onDelete('cascade');
            $table->unsignedBigInteger('componente_id')->unsigned();            
            $table->foreign('componente_id')->references('id')->on('componente')->onDelete('cascade');
            $table->unsignedBigInteger('estandar_id')->unsigned();            
            $table->foreign('estandar_id')->references('id')->on('estandar')->onDelete('cascade');
            $table->unsignedBigInteger('competencia_id')->unsigned();            
            $table->foreign('competencia_id')->references('id')->on('competencia')->onDelete('cascade');
            $table->unsignedBigInteger('desempeno_id')->unsigned();            
            $table->foreign('desempeno_id')->references('id')->on('desempeno')->onDelete('cascade');
            $table->unsignedBigInteger('afirmacion_id')->unsigned();            
            $table->foreign('afirmacion_id')->references('id')->on('afirmacion')->onDelete('cascade');
            $table->unsignedBigInteger('gpa_id')->unsigned();            
            $table->foreign('gpa_id')->references('id')->on('gpa')->onDelete('cascade');
            $table->unsignedBigInteger('estado_id')->unsigned();            
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronograma');
    }
};
