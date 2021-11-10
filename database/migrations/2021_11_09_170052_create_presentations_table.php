<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('local_product_id')
            ->unsigned()
            ->constrained('local_product')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('product_id')
            ->unsigned()
            ->constrained('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('local_id')
            ->unsigned()
            ->constrained('locals')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->double('price');
            $table->string('presentation');
            $table->boolean('is_active')->default(true);



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
        Schema::dropIfExists('presentations');
    }
}
