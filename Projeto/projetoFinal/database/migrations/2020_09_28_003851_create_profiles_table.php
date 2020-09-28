<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome', 100);
            $table->string('endereco', 100);
            $table->string('referencia', 100);
            $table->string('pagamento', 50);
            $table->string('cpf');
            $table->string('rg');
            $table->string('contato');
            $table->string('usuario');
            $table->string('senha');
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
        Schema::dropIfExists('profiles');
    }
}
