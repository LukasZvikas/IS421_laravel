<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 10/29/18
 * Time: 12:00 AM
 */

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;



class AuthTest extends TestCase {

    function testRegisterPage() {

        $response = $this->get("/register");

        $response->assertStatus(200);
    }

    function testLoginPage() {

        $response = $this->get("/login");

        $response->assertStatus(200);
    }


}



?>