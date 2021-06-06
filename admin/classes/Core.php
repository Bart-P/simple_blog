<?php

class Core {

    public $db; 
    private static $instance; 

    private function __construct()
    {
        $dsn = 'mysql:host=' . Config::read('host') 
            . ';dbname='     . Config::read('dbname') 
            . ';charset='    . Config::read('charset');

        $user = Config::read('user');
        $pass = Config::read('pass');

        $this->db = new PDO($dsn, $user, $pass);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function getInstance()
    {
        if(!isset(self::$instance))
        {
            $object = __CLASS__; 
            self::$instance = new $object;
        }
        return self::$instance;
        
    }
}
