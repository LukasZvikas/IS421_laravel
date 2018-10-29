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

class AuthTest extends TestCase
{

    public function testUserInsert()
    {
        $user = factory(\App\User::class)->make();
        $this->assertTrue($user->save());
    }

}

?>