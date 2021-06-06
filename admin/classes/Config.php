<?php

class Config {

    static $confArr; 

    public static function read($name)
    {
        return self::$confArr[$name]; 
    }

    public static function write($name, $value)
    {
        self::$confArr[$name] = $value;
    }
}

Config::write('host', 'localhost');
Config::write('dbname', 'simple_blog');
Config::write('user', 'root');
Config::write('pass', '');
Config::write('charset', 'utf8mb4');
