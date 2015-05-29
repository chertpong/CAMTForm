<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DegreeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('degree')->delete();
        $degrees = array(
            array(
                'degree_type'=>'ปริญญาตรี'
            ),
            array(
                'degree_type'=>'ปริญญาโท'
            ),
            array(
                'degree_type'=>'ปริญญาเอก'
            )
        );
        DB::table('degree')->insert($degrees);
    }

}