<?php
/**
 * Created by PhpStorm.
 * User: Chertpong
 * Date: 5/31/2015
 * Time: 4:34 PM
 */
use Illuminate\Database\Seeder;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder{
    public function run(){
        DB::table('student')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Student::create(array(
            'id'=>562115014,
            'password'=>bcrypt(5014)
        ));
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}