<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployee2sTable extends Migration
{
   
    public function up()
    {
        Schema::create('employee2s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->string('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee2s');
    }
}
