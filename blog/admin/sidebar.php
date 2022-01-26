<?php 

?>

<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="<?= ($page == 'index.php') ? 'active' : ''; ?>">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Dashboard</span></a>
                                <ul class="collapse">
                                    <li class="<?= ($page == 'index.php') ? 'active' : ''; ?>" ><a href="index.php">View Dashboard</a></li>
                                   
                                </ul>
                            </li>
                            <li class="<?= ($page == 'AddCategory.php') ? 'active' : ''; ?>" > 
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Category</span></a>
                                <ul class="collapse">
                                    <li class="<?= ($page == 'AddCategory.php') || ($page == 'ManageCategory.php')  ? 'active' : ''; ?>"  ><a href="AddCategory.php">Add Category</a></li>
                                    
                                    <li><a href="ManageCategory.php">Manage Category</a></li>
                                   <!-- <li><a href="index3.html">SEO dashboard</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
</div>