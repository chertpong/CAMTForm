<?php
/**
 * Created by PhpStorm.
 * User: Chertpong
 * Date: 5/26/2015
 * Time: 3:26 PM
 */

use Illuminate\Database\Seeder;
use App\Role;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{
    public function run(){
        DB::table('roles')->delete();
        Role::create(array(
            'name' => 'admin'
        ));
        Role::create(array(
            'name' => 'mod'
        ));
        Role::create(array(
            'name' => 'user'
        ));
    }
}