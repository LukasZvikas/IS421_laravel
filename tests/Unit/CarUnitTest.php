<?php
/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 10/29/18
 * Time: 4:01 PM
 */

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Car;

class CarTest extends TestCase
{
    public function testCar(){

        $car = factory(Car::class)->make();
        $this->assertTrue($car->save());

        $car->delete();
    }

}


?>