<?php //include('inc/menu.php'); ?>

<?php
if(isset($_GET['p'])):
    include('page/'.$_GET['p'].'.php');
endif;
?>