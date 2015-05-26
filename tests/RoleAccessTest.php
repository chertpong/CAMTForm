<?php
/**
 * Created by PhpStorm.
 * User: Chertpong
 * Date: 5/26/2015
 * Time: 4:43 PM
 */
use App\User;
class RoleAccessTest extends TestCase{
    //test to pass
    public function testAdminAccess(){
        $user = User::find(1);
        $this->be($user);
        $this->call('GET', 'roles');
        $this->assertResponseOk();
    }

    public function testModAndAdminAccess(){
        $user = User::find(1);
        $this->be($user);
        $this->call('GET', 'reports');
        $this->assertResponseOk();

        $user = User::find(2);
        $this->be($user);
        $this->call('GET', 'reports');
        $this->assertResponseOk();
    }

    //test to fail
    public function testUserAccessAdmin(){
        $user = User::find(3);
        $this->be($user);
        $this->call('GET', 'roles');
        $this->assertResponseStatus(403);
    }
    public function testUserAccessMod(){
        $user = User::find(3);
        $this->be($user);
        $this->call('GET', 'reports');
        $this->assertResponseStatus(403);
    }
    public function testModAccessAdmin(){
        $user = User::find(2);
        $this->be($user);
        $this->call('GET', 'roles');
        $this->assertResponseStatus(403);
    }
    public function testGuestAccessAdmin(){
        $this->call('GET', 'roles');
        $this->assertResponseStatus(401);
    }
    public function testGuestAccessMod(){
        $this->call('GET', 'reports');
        $this->assertResponseStatus(401);
    }
//    public function testGuestAccessUser(){
//
//    }
}