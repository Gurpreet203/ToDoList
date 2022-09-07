<?php
    session_start();
    include ('validation.php');

    if(isset($_POST['submit']))
    {
        $_SESSION['error'] = validate($_POST['title'] , 'title');
        $_SESSION['error'] = validate($_POST['description'] , 'description');
        

        if(!empty($_SESSION['error']))
        {
            header('location:../add.php');
        }
        else
        {
            $_SESSION['notes'][] = $_POST;
            $curr = count($_SESSION['notes']);
            array_unshift($_SESSION['notes'][$curr-1] , $curr);
            $_SESSION['validate']=false;
            header('location:../Details.php');
        }
    }
?>