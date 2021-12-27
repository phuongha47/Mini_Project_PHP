<?php
class Database{
    private static $dsn = 'mysql:host=localhost;dbname=mini_pro';
    private static $connect =null;
    private static $username='root';
    private static $pass='';
    public static $db;
    public static function connect()
    {
        if (!isset(self::$db)){
            try{
                self::$db = new PDO(self::$dsn, self::$username,self::$pass);
                self::$db->exec('set names utf-8');
            }
            catch (PDOException $e){
                echo $e->getMessage();
            }
            return self::$db;
        }
    }
}
?>