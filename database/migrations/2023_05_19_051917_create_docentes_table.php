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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('departamento',15);
            $table->string('PrimerNombre',30);
            $table->string('SegundoNombre',30);
            $table->string('PrimerApellido',30);
            $table->string('SegundoApellido',30);
            $table->string('Edad',30);
            $table->string('Genero',30);
            $table->string('EspecialidadTitulacion',30);
            $table->string('EspecialidadImparte',30);
            $table->string('DUI',30);
            $table->string('NUP',30);
            $table->string('Acreditado',30);
            $table->string('FechaAcreditado',30);
            $table->string('Dirreccion',255);
            $table->string('Telefono',30);
            $table->string('CorreoPersonal',30);
            $table->string('CorreoMINED',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
