<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class FatherMotherStatusSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('father_mother_status')->delete();
        $father_mother_status = array(
            array(
                'father_mother_status'=>'อยู่ด้วยกัน'
            ),
            array(
                'father_mother_status'=>'แยกกันอยู่'
            ),
            array(
                'father_mother_status'=>'หย่า'
            )
        );
        DB::table('father_mother_status')->insert($father_mother_status);
    }

}