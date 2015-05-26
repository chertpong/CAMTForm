<?php
/**
 * Created by PhpStorm.
 * User: Chertpong
 * Date: 5/26/2015
 * Time: 4:15 PM
 */
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();
        User::create(array(
            'name' => 'admin'
            ,'email' => 'admin@admin.com'
            ,'password' => '1234'
            ,'role_id' => '1'
        ));
        User::create(array(
            'name' => 'mod'
            ,'email' => 'mod@mod.com'
            ,'password' => '1234'
            ,'role_id' => '2'
        ));
        User::create(array(
            'name' => 'user'
            ,'email' => 'user@user.com'
            ,'password' => '1234'
            ,'role_id' => '3'
        ));
    }
}