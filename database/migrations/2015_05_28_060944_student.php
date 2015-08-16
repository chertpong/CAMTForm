<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('student', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id')->primary();
            $table->string('password',60);
            $table->date('DOB');
            $table->integer('nationality');
            $table->integer('race');
            $table->string('identication_no',13);
            $table->integer('gender');
            $table->string('prefix',4);
            $table->string('name');
            $table->string('lastname');
            $table->integer('major')->unsigned();
            $table->foreign('major')->references('id')->on('major');
            $table->integer('degree')->unsigned();
            $table->foreign('degree')->references('id')->on('degree');
            $table->integer('adviser')->unsigned();
            $table->foreign('adviser')->references('id')->on('adviser');
            $table->integer('address')->unsigned();
            $table->foreign('address')->references('id')->on('address');
            $table->integer('scholarship')->unsigned();
            $table->foreign('scholarship')->references('id')->on('scholarship');
            $table->integer('student_loan')->unsigned();
            $table->foreign('student_loan')->references('id')->on('student_loan');
            $table->integer('military_detail')->unsigned();
            $table->foreign('military_detail')->references('id')->on('military_detail');
            $table->integer('father_mother_status')->unsigned();
            $table->foreign('father_mother_status')->references('id')->on('father_mother_status');
            $table->integer('father')->unsigned();
            $table->foreign('father')->references('id')->on('family_member');
            $table->integer('mother')->unsigned();
            $table->foreign('mother')->references('id')->on('family_member');
            $table->integer('parent')->unsigned();
            $table->foreign('parent')->references('id')->on('family_member');
            $table->string('phone_number');
            $table->integer('skill')->unsigned();
            $table->foreign('skill')->references('id')->on('skill');
            $table->text('skill_detail');
            $table->string('disease');
            $table->text('treatment');
            $table->binary('image');
            $table->binary('house1');
            $table->binary('house2');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('student');
	}

}
