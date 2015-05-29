<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ScholarshipSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarship')->delete();
        $scholarship_type = array(
            array(
                'scholarship_type'=>'เคยได้รับทุนการศึกษา'
            ),
            array(
                'scholarship_type'=>'ไม่เคยได้รับทุนการศึกษา'
            )
        );
        DB::table('scholarship')->insert($scholarship_type);
    }

}