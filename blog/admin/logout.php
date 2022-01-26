<?php

session_start();

session_destroy();

header("Location:  http://localhost/php/blog/admin/login.php");