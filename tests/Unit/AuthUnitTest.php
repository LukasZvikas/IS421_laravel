<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 10/29/18
 * Time: 3:01 PM
 */


namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class AuthTest extends TestCase
{

    public function testUserInsert()
    {
        $user = factory(User::class)->make();
        $this->assertTrue($user->save());
    }

    public function testUserUpdate() {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
}
    public function testUserDelete(){
        $user = new User();
        $user->name = 'Lukas';
        $user->email = 'lzvikas1@gmail.com';
        $user->password = '12345678';
        $user->save();
        $this->assertTrue($user->delete());
    }

}

?>