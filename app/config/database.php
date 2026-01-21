<?php

class Database
{
    private static $conn = null;

    public static function connect()
    {
        if (self::$conn === null) {
            self::$conn = new PDO(
                "mysql:host=localhost;dbname=artisan_academy;charset=utf8",
                "root",
                ""
            );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }

    public static function connection()
    {
        return self::connect();
    }

    public static function getInstance()
    {
        return self::connect();
    }
}
