<?php

namespace Falstack\Weather;

class WeatherApi
{
    public function make($val, array $opts = [])
    {
        $salt = isset($opts['salt']) ? $opts['salt'] : '';

        return hash('md5', $val . $salt);
    }

    public function check($val, $hashVal, array $opts = [])
    {
        $salt = isset($opts['salt']) ? $opts['salt'] : '';

        return hash('md5', $val . $salt) == $hashVal;
    }
}