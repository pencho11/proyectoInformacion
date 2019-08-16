<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *Modelo
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id_post');
            $table->string('titulo','max');         
            $table->string('Contenido')->nullable();
            $table->bigInteger('id_autor')->unsigned();
            $table->timestamp('fecha_creacion',4)->nullable();
            $table->timestamp('deleted_at',4)->nullable();
            $table->timestamp('fecha_at',4)->nullable();
            
            $table->foreign('id_autor')->references('id')->on('users');
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
