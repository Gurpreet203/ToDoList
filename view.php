<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
</html>

<?php

    session_start();

    include 'processing/validation.php';

    $validate = PageValidate($_SESSION);
    if($validate==false)
    {
        header('location:add.php');
    }

    $count =0;
    $id = $_GET['id'];
    foreach($_SESSION['notes'] as $key=>$value)
    {
        if( $value[0] == $id)
        {
            echo "<div class=\"view\">";
            echo "<h2>".$value['title']."</h2>";
            echo "<p>".$value['description']."</p>";
            echo "</div>";
            $count =0 ;
            break;
        }
        else
        {
            $count++;
        }
    }
    if($count>0)
    {
        header('location:Details.php');
    }
    echo "<a href=\"Details.php\" class=\"back\">Back</a>";
?>