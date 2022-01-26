<?php

require_once "../vendor/autoload.php";
use App\Classes\Category;

$category = new Category();

if (isset($_GET['active']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $category->active($id);
    
    //header("Location : ManageCategory.php");
  
}
if (isset($_GET['inactive']) && isset($_GET['table'])) {
    $id = $_GET['id'];
    $category->inActive($id);
    //header("Location : ManageCategory.php");
    
}
