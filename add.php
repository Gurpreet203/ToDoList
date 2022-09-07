<?php
    include 'processing/addProcess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action="processing/addProcess.php" method="post">
        <h2>Add Notes</h2>
        <label for="title">Title</label>
        <input type="text" name="title">

            <?php
                if(!empty($_SESSION['error']['title']))
                {
                    echo "<div>".$_SESSION['error']['title']."</div>";
                }
            ?>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
            <?php
                if(!empty($_SESSION['error']['description']))
                {
                    echo "<div>".$_SESSION['error']['description']."</div>";
                    $_SESSION['error'] =[];
                }
            ?>
        <input type="submit" name="submit" value="save">
    </form>
</body>
</html>