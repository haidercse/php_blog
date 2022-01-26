<?php

namespace App\Classes;
use App\Classes\Database;
class Login{
    

    public function loginCheck($data){
        $email = $data['email'];
        $password = $data['password'];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' and `password` ='$password'";
        $result = mysqli_query(Database::dbCon(), $sql);
        
      
        if($result){
           if(mysqli_num_rows($result) == 1){
               $row = mysqli_fetch_object($result);
               session_start();
               $_SESSION['user_id'] = $row->id;
               $_SESSION['user_name'] = $row->name;
               $_SESSION['user_email'] = $row->email;
               
              
            header('Location: http://localhost/php/blog/admin/index.php');
            $success = "<p class='alert alert-success text-center'>Successfully login!</p>";
            return $success;
           }else{
              $error =  "<p class='alert alert-danger text-center'>User Email or Password invalid</p>";
              return $error;
           }
        }else{
            die('Databse connection failled!');
        }
    }
}