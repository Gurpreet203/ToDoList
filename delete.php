<?php

    session_start();

    $id = $_GET['id'];
    foreach($_SESSION['notes'] as $key=>$value)
    {
        if( $value[0] == $id)
        {
           unset($_SESSION['notes'][$key]);
           header('location:Details.php');
        }
    }
?>