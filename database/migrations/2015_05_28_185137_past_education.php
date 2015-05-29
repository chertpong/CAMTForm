<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PastEducation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('past_education', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('student_id');
            $table->foreign('student_id')->references('id')->on('student');
            $table->string('degree');
            $table->string('major');
            $table->string('collage');
            $table->date('year');
            $table->double('grade',2,1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('past_education');
    }

}
