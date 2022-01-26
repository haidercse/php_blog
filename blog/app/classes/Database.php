<?php

namespace App\Classes;

class Database{

    public static function dbCon(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "blog_php";
        $link =  mysqli_connect($host,$user,$password,$database);
        return $link;
    }
}