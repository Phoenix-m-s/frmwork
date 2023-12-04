<?php

class dbConn{

    protected static $db=array();

    public function __construct($mysqlInfo,$CONNECTION_NAME) {

        // echo '<pre/>';

        $DB_HOST=$mysqlInfo['connections'][$CONNECTION_NAME]['DB_HOST'];
        $DB_DATABASE=$mysqlInfo['connections'][$CONNECTION_NAME]['DB_DATABASE'];
        $DB_USER=$mysqlInfo['connections'][$CONNECTION_NAME]['DB_USER'];
        $DB_PASSWORD=$mysqlInfo['connections'][$CONNECTION_NAME]['DB_PASSWORD'];


        try {

            self::$db[$CONNECTION_NAME] = new PDO("mysql:host=".$DB_HOST.";dbname=".$DB_DATABASE."", $DB_USER, $DB_PASSWORD);


        }
        catch (PDOException $e) {
             "Connection Error: " . $e->getMessage();
        }

    }

    public static function getConnection($CONNECTION_NAME='default')
    {
        global $mysql;

        if($CONNECTION_NAME=='')
        {
            $CONNECTION_NAME='default';
        }


        if($CONNECTION_NAME=='default')
        {
            $CONNECTION_NAME=$mysql['default'];
        }


        if (!isset(self::$db[$CONNECTION_NAME]))
        {
            //if(count(self::$db)==0)
            //{
                new dbConn($mysql,$CONNECTION_NAME);

            //}
        }

        boxLogin::boxController();
        //print_r(self::$db[$CONNECTION_NAME]);


        return self::$db[$CONNECTION_NAME];
    }


}

