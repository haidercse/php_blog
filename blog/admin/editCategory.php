<?php

use App\Classes\Category;

require_once "header.php";
require_once "../vendor/autoload.php";


$category = new Category();
if(isset($_POST['addCategory'])){
  $message =   $category->addCategory($_POST);
  
} 

?>
 
            
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class=" ml-3 mt-2">
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    <?php 
                       if(isset($message)){
                           echo $message;
                       }
                    ?>
                   
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                       
                    </div>
                    <div class="form-group">
                        <label for="name">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="0">- Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                    </div>
                    <button type="submit" name="addCategory" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php 
  require_once "footer.php";
?>