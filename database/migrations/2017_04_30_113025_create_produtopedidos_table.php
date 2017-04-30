<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutopedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtopedidos', function (Blueprint $table) {

            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')
                ->references('id')->on('pedidos')
                ->onDelete('cascade');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')
                ->references('id')->on('produtos')
                ->onDelete('cascade');

            $table->integer('quant');
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
        Schema::drop('produtopedidos');
    }
}
