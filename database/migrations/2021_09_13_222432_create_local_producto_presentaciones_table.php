<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalProductoPresentacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_producto_presentacions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('local_producto_id')
            ->unsigned()
            ->constrained('local_producto')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('presentacion_id')
            ->unsigned()
            ->constrained('presentacions')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->boolean('activo')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('local_producto_presentaciones');
    }
}
