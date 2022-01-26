<?php 

use App\Classes\Database;
namespace App\Classes;



class Category{
    
    
    //category list
    public function index(){
       $query = "select * from `categories`";
       $result = mysqli_query(Database::dbCon(),$query);
       return $result;
    }


    //category add 
    public function addCategory($data){
        $categoryName = $data['name'];
        $status = $data['status'];
        $query = "INSERT INTO `categories`(`name`, `status`) VALUES ('$categoryName','$status')";
        $result = mysqli_query(Database::dbCon(),$query);
        if(isset($result)){
            $inserMessage = "<p class='alert alert-success'>Category Save Successfully</p>";
            return $inserMessage;
        }else{
            $inserMessage = "<p class='alert alert-danger'>Category not Save</p>";
            return $inserMessage;
        }
    }

    public function delete($id){
        $query = "delete from `categories` where `id` = '$id'";
        $result = mysqli_query(Database::dbCon(), $query);
        if(isset($result)){
            $message = "<p class='alert alert-success'>Category delete successfully</p>";
            return $message;
        }else{
            $message = "<p class='alert alert-danger'>Category Not deleted</p>";
            return $message;
        }
    }

    //status active or in active fucntion
    public function active($id)
    {
        $activeId = $id;
        $query = "update `categories` set `status`= '1' where `id` = '$activeId'";
        mysqli_query(Database::dbCon(),$query);
        return 11;
       
        
    }
    public function inActive($id)
    {
        $inActiveId = $id;
        $query = "update `categories` set `status`= '0' where `id` = '$inActiveId'";
        mysqli_query(Database::dbCon(),$query);
        return 11; 
       
        
    }
}