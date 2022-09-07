<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styleTable.css">
</head>
<body>
    <nav>
        <h2>Here is your notes</h2>
    </nav>
</body>
</html>


<?php
    session_start();
    echo "<a href=\"add.php\" class=\"add\">Add</a>";
    echo "<table cellspacing=0> <th>Sequence</th> <th>Title</th> <th>View</th> <th>Edit</th> <th>Delete</th>";

    if(empty($_SESSION['notes']))
    {
        echo "</table>";
        echo "<h2>No Work to Do</h2>";
    }
    else
    {
        foreach($_SESSION['notes'] as $key=>$value)
        {
            echo "<tr>";
            echo "<td>".$value[0]."</td>";
            echo "<td>".$value['title']."</td>";
            echo "<td> <a href=\"view.php?id=$value[0]\" class=\"view\">View</a> </td>";
            echo "<td> <a href=\"edit.php?id=$value[0]\" class=\"edit\">Edit</a> </td>";
            echo "<td> <a href=\"delete.php?id=$value[0]\" class=\"delete\">Delete</a> </td>";
            echo "</tr>";
        }
    }

    echo "</table>";
?>