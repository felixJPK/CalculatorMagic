<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //define untuk membuat dan memodifikasi table
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');//auto unsigned bigInteger
            $table->string('nim',20);
            $table->string('name',255);
            $table->enum('gender',['L','P']);
            $table->text('address');
            $table->date('birth_date');
            $table->string('phone',15);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //menghapus atau mengubah struktur table
    public function down()
    {
        Schema::dropIfExists('students');
        
    }
}
