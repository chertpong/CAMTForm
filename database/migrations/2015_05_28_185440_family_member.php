<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FamilyMember extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('family_member', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('student_id');
            $table->foreign('student_id')->references('id')->on('student');
            $table->string('relation');
            $table->string('name');
            $table->string('lastname');
            $table->string('status');
            $table->date('DOB');
            $table->string('identication_no');
            $table->string('degree');
            $table->string('college');
            $table->integer('job')->unsigned();
            $table->foreign('job')->references('id')->on('job');
            $table->text('job_detail');
            $table->integer('land_owner');
            $table->integer('income_month');
            $table->integer('income_year');
            $table->integer('address')->unsigned();
            $table->foreign('address')->references('id')->on('address');
            $table->string('phone_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('family_member');
    }

}
