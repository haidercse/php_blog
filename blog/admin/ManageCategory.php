<?php

use App\Classes\Category;

require_once "header.php";
require_once "../vendor/autoload.php";


$category = new Category();

$categories =   $category->index();

?>


<div class="conatiner">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <h3 class="my-2">Ctaegory List</h3>
               
                <table class="table table-striped table-bordered " id="data-tables">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Status</th>
                            <th scope="col" style="width: 250px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_object($categories)) {
                            $i++;
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= ($row->status == 1) ? 'Active' : 'In ACtive' ?></td>
                                <td>
                                    <?php if ($row->status == 1) { ?>
                                        <a href="status.php?id=<?= $row->id ?>&inactive&table=categories" class="btn btn-sm btn-warning">Inactive</a>
                                    <?php } ?>
                                    <?php if ($row->status == 0) { ?>
                                        <a href="status.php?id=<?= $row->id ?>&active&table=categories" class="btn btn-sm btn-info ">Active</a>
                                    <?php } ?>


                                    <a href="editCategory.php" class="btn btn-sm btn-success">Edit</a>
                                    <a href="delete.php?id=<?= $row->id ?>&table=categories" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<?php
require_once "footer.php";
?>