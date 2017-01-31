<?php

ini_set('display_errors','on');
    error_reporting(E_ALL);

abstract class Connection
{
    public static function dbConnect()
    {
        return new PDO("mysql:host=localhost; dbname=Datacorp", "root", "Ziron1515");
    }
}
