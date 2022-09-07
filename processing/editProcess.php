<?php
session_start();
include 'validation.php';
$validate = PageValidate($_SESSION);
    if($validate==false)
    {
        header('location:add.php');
    }
    if(isset($_POST['submit']))
    {
        $id = (int) $_GET['id'];
        $_SESSION['error'] = validate($_POST['title'] , 'title');
        $_SESSION['error'] = validate($_POST['description'] , 'description');
        if(!empty($_SESSION['error']))
        {
            header('location:../edit.php?id='.$id);       
        }
        else
        {
        foreach($_SESSION['notes'] as $key=>$value)
        {
            if( $value[0] == $id)
            {
                $_SESSION['notes'][$key] = $_POST;
                array_unshift($_SESSION['notes'][$key] , $id);
                header('location:../Details.php');
            }
        }
    }
    }
?>