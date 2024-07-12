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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 30)->nullable()->index();
            $table->string('curso', 30)->nullable()->index();
            $table->decimal('nota_1', 4, 2)->default(0);
            $table->decimal('nota_2', 4, 2)->default(0);
            $table->decimal('promedio', 4, 2);
            $table->string('condicion', 15);
            $table->date('fecha_reg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
