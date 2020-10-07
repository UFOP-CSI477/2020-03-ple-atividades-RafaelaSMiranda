<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoAdicionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_adicional', function (Blueprint $table) {
            $table->id() ->autoIncrement();
            $table->string('quantidade');


            $table->unsignedBigInteger('adicional_id');
            $table->unsignedBigInteger('produto_id');

            $table->foreign('adicional_id')->references('id')->on('adicionais');
            $table->foreign('produto_id')->references('id')->on('produtos');

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
        Schema::dropIfExists('produto_adicional');
    }
}
