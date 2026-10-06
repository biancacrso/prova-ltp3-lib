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
        Schema::table('livros', function (Blueprint $table) {
            $table->string('titulo');
            $table->year('ano_publicacao');
            $table->string('isbn')->unique();
            $table->foreignId('autor_id')->constrained('autores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livros', function (Blueprint $table) {
            $table->dropForeign(['autor_id']);
            $table->dropUnique(['isbn']);

            $table->dropColumn([
                'titulo',
                'ano_publicacao',
                'isbn',
                'autor_id'
            ]);
        });
    }
};