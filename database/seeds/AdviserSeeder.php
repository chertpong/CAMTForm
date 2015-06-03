<?php
/**
 * Created by PhpStorm.
 * User: Chertpong
 * Date: 6/3/2015
 * Time: 9:55 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Adviser;
class AdviserSeeder extends Seeder{
    public function run(){
        DB::table('adviser')->delete();
        Adviser::create([
            'name'=>'จาร',
            'lastname'=>'โตวววว'
        ]);
        Adviser::create([
            'name'=>'จาร',
            'lastname'=>'โจ้วววว'
        ]);
    }
}