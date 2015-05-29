<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StudentLoanSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_loan')->delete();
        $student_loan = array(
            array(
                'student_lone_type'=>'เคยกู้เงินจากกองทุนกู้ยืมเพื่อการศึกษา'
            ),
            array(
                'student_lone_type'=>'ไม่เคยกู้เงินจากกองทุนกู้ยืมเพื่อการศึกษา'
            )
        );
        DB::table('student_loan')->insert($student_loan);
    }

}