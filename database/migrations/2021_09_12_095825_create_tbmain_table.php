<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmain', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('namaPost');
            $table->string('like');
            $table->string('deskripsi');
            $table->string('image');
            
            $table->string('fProfile');
            $table->string('namaQ');
            $table->string('namaA');
            $table->string('waktu');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbmain');
    }
}
