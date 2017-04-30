<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('quant_min');
            $table->integer('quant');
            $table->decimal('preco', 8, 2);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                ->references('id')->on('categorias')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.

     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}
