<?php
    include('function_inc.php');
    session_start();
    session_unset();	
    session_destroy();
    redirect('/project/pro/index.php');
    //header('Location:/project/pro/index.php');
?>