<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id('id', 10);
            $table->unsignedBigInteger('equipamento_id');
            $table->unsignedBigInteger('user_id');


            $table->foreign('equipamento_id')->references('id')->on('equipamentos');

            $table->foreign('user_id')->references('id')->on('users');


            $table->string('descricao', 191);
            $table->date('dataLimite');
            $table->unsignedInteger('tipo', 10);


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
        Schema::dropIfExists('registros');
    }
}
