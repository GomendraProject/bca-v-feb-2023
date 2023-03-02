<?php
class ConnectionHelper
{
    private static $connection;

    public static function getConnection() {
        if(self::$connection == null) {
            self::$connection = new PDO('mysql:host=localhost;dbname=bca_v', 'root', '');
        }
        return self::$connection;
    }
}