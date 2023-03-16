<?php
class ConnectionHelper
{
    /**
     * @var PDO
     */
    private static $connection;

    public static function getConnection() {
        if(self::$connection == null) {
            self::$connection = new PDO('mysql:host=localhost;dbname=bca_v', 'root', '');
            // self::$connection = mysqli_connect()
        }
        return self::$connection;
    }
}
