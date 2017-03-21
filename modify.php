<?php
    require_once 'connect.php';
    $name=$_GET['name'];
    $content=$_GET['content'];
    $sql="UPDATE library SET content='content ' WHERE name='$name'";
    if(mysqli_query($con, $sql))
    {
        echo "modify success!";
    }