<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutomenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtomenus', function (Blueprint $table) {

            $table->integer('menu_id')->unsigned();
            $table->foreign('menu_id')
                ->references('id')->on('menus')
                ->onDelete('cascade');

            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')
                ->references('id')->on('produtos')
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
        Schema::drop('produtomenus');
    }
}
