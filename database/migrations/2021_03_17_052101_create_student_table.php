<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname');
            $table->string('email');
            $table->integer('mobile');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('student');
    }
}
