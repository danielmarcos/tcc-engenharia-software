<?php
#phpinfo();
#exit();

if(isset($_GET['p'])):
    $page = $_GET['p'];
    if(file_exists('page/'.$page.'.php')):
            include "config.php";
            include('page.php');
            exit();
        else:
            header('location:?p=404');
            exit();
    endif;
else:
    include('page/index.php');
    exit();
endif;
?>