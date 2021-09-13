<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('local_id')
            ->unsigned()
            ->constrained('locals')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('producto_id')
            ->unsigned()
            ->constrained('productos')
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
        Schema::dropIfExists('local_productos');
    }
}
