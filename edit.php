<?php
    include 'processing/editProcess.php ';
    
    static $temp;
    $count=0;
    $id = $_GET['id'];
    foreach($_SESSION['notes'] as $key=>$value)
    {
        if( $value[0] == $id)
        {
           $temp = $value;
           $count =0 ;
           break;
        }
        else{
            $count++;
        }
    }
    if($count>0)
    {
        header('location:Details.php');
    }
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
    <form action="processing/editProcess.php?id=<?php echo $id?>" method="post">
        <h2>Edit Notes</h2>
        <label for="title">Title</label>
        <input type="text" name="title" value=<?php echo $temp['title']?>>
            <?php
                if(!empty($_SESSION['error']['title']))
                {
                    echo "<div>".$_SESSION['error']['title']."</div>";
                }
            ?>
        <label for="description">Description</label>
        <textarea name="description" cols="30" rows="10"><?php echo $temp['description']?></textarea>
            <?php
                if(!empty($_SESSION['error']['description']))
                {
                    echo "<div>".$_SESSION['error']['description']."</div>";
                    $_SESSION['error']=[];
                }
            ?>
        <input type="submit" name="submit" value="Save">
        <a href="Details.php" class="back">Back</a>
    </form>
</body>
</html>