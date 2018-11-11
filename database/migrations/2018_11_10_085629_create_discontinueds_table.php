<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscontinuedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discontinueds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('course_name');
            $table->string('student_email');
            $table->string('parent_email');
            $table->bigInteger('student_mobile');
            $table->bigInteger('parent_mobile');
            $table->string('address');
            $table->boolean('discontinued')->default(false);
            $table->boolean('course_completed')->default(false);
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
        Schema::dropIfExists('discontinueds');
    }
}
