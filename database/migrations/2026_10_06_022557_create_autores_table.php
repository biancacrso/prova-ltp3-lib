<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autores', function (Blueprint $table) {
            $table->string('nome');
            $table->string('nacionalidade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('autores', function (Blueprint $table) {
            $table->dropColumn(['nome', 'nacionalidade']);
        });
    }
};