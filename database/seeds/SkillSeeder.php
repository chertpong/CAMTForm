<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SkillSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->delete();
        $skills = array(
            array(
                'skill_type'=>'วิชาการ'
            ),
            array(
                'skill_type'=>'กีฬา'
            ),
            array(
                'skill_type'=>'ดนตรี่'
            )
        );
        DB::table('skill')->insert($skills);
    }

}