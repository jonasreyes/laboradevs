<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    /**
      creamos dos tablas de una vez para garantizar el órden correcto!
     */
    Schema::create('categorias', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->timestamps();
    });

    Schema::create('experiencias', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->timestamps();
    });

    Schema::create('ubicacions', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->timestamps();
    });

    Schema::create('salarios', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->timestamps();
    });

    Schema::create('skills', function (Blueprint $table) {
      $table->id();
      $table->string('nombre');
      $table->text('descripcion')->nullable();
      $table->timestamps();
    });

    Schema::create('vacantes', function (Blueprint $table) {
      $table->id();
      $table->string('titulo');
      $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
      $table->foreignId('experiencia_id')->constrained()->onDelete('cascade');
      $table->foreignId('ubicacion_id')->constrained()->onDelete('cascade');
      $table->foreignId('salario_id')->constrained()->onDelete('cascade');
      $table->text('descripcion');
      $table->string('imagen');
      $table->text('skills');
      $table->boolean('activa')->default(true);
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->timestamps();
      // $table->foreignId('skill_id')->constrained()->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('vacantes');
    Schema::dropIfExists('experiencias');
    Schema::dropIfExists('categorias');
    Schema::dropIfExists('ubicacions');
    Schema::dropIfExists('salarios');
    Schema::dropIfExists('skills');
  }
}
