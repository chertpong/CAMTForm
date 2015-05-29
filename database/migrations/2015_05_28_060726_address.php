<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Address extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('address', function(Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->string('village')->nullable();
            $table->string('street')->nullable();
            $table->string('road')->nullable();
            $table->string('sub_district');
            $table->string('district');
            $table->string('province');
            $table->string('postal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address');
    }

}
