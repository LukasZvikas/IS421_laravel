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

    public function testCarYearUpdate() {
        $car = Car::find(1);
        $car->year = 2000;
        $this->assertTrue($car->save());
    }
    public function testCarDelete(){
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'focus';
        $car->year = '2005';
        $car->save();
        $this->assertTrue($car->delete());
    }

    public function testCarCount(){
        $cars = Car::All();
        $carCount = $cars->count();
        $this->assertEquals(50, $carCount);
    }

    public function testCarYearType() {
        $car = Car::find(1);
        $carYear = (int) $car->year;
        $this->assertInternalType('integer', $carYear);
    }

}


?>