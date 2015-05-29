<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JobSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job')->delete();
        $jobs = array(
            array(
                'type'=>'ข้าราชการ/รัฐวิสาหกิจ'
            ),
            array(
                'type'=>'ค้าขาย-เจ้าของร้าน'
            ),
            array(
                'type'=>'ค้าขาย-หาบเหร่/แผงลอย'
            ),
            array(
                'type'=>'ค้าขาย-เช่าร้าน'
            ),
            array(
                'type'=>'เกษตรกร-ทำไร่/ทำสวน'
            ),
            array(
                'type'=>'เกษตรกร-เลี้ยงสัตว์'
            ),
            array(
                'type'=>'อื่นๆ'
            )
        );
        DB::table('job')->insert($jobs);
    }

}