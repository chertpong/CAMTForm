<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MajorSeeder extends Seeder {

/**
* Run the database seeds.
*
* @return void
*/
public function run()
    {
    DB::table('major')->delete();
        $majors = array(
            array(
            'major_type'=>'วิศวกรรมซอฟต์แวร์'
            ),
            array(
                'major_type'=>'แอนนิเมชัน'
            ),
            array(
                'major_type'=>'การจัดการสมัยใหม่'
            )
        );
        DB::table('major')->insert($majors);
    }

}