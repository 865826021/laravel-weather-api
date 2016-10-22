<?php

use Falstack\Weather\WeatherApi;
use PHPUnit\Framework\TestCase;

class WeatherApiTest extends TestCase
{
    protected $weather;

    public function __construct()
    {
        $this->weather = new WeatherApi();
    }

    public function testWeatherApiMake()
    {
        $pwd = md5('password');

        $pwd2 = $this->weather->make('password');

        $this->assertEquals($pwd, $pwd2);
    }

    public function testWeatherApiMakeWithSalt()
    {
        $pwd = md5('passwordyui');

        $pwd2 = $this->weather->make('password', ['salt' => 'yui']);

        $this->assertEquals($pwd, $pwd2);
    }

    public function testWeatherApiCheck()
    {
        $pwd = md5('password');

        $check = $this->weather->check('password', $pwd);

        $this->assertTrue($check);
    }
}