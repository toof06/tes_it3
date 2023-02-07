<?php

class DB extends PDO
{
    public function __construct($dbname)
    {
        try {
            parent::__construct("mysql:host=localhost;dbname=$dbname;charset=utf8",
                "root", "");
        } catch (Exception $e) {
            var_dump($e);
        }
    }
}

