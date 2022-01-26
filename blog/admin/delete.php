<?php 

use App\Classes\Category;
require_once "../vendor/autoload.php";

$category = new Category;

if(isset($_GET['table'])){
    $id = $_GET['id'];
    $category->delete($id);
    header("Location: ManageCategory.php");
    exit();
}