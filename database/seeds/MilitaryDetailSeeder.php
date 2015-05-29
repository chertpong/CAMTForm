<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MilitaryDetailSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('military_detail')->delete();
        $military_detail = array(
            array(
                'military_detail_type'=>'จบ นศท. ปี 1 และต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 1 และไม่ต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 2 และต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 2 และไม่ต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 3 และต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 3 และไม่ต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 4 และต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 4 และไม่ต้องการเรียนต่อ'
            ),
            array(
                'military_detail_type'=>'จบ นศท. ปี 5 '
            ),
            array(
                'military_detail_type'=>'ไม่เป็น นศท. และยังไม่ได้เกนทหาร'
            ),
            array(
                'military_detail_type'=>'ผ่านการเกนทหาร'
            ),
            array(
                'military_detail_type'=>'ไม่เป็น นศท.และไม่ต้องเกนทหาร'
            )
        );
        DB::table('military_detail')->insert($military_detail);
    }

}