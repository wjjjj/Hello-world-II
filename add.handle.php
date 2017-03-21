<?php
    require_once 'connect.php';
    $name=$_POST['name'];
    $content=$_POST['content'];
    $price = $_POST['price'];
    echo $name;
    $sql="INSERT INTO library(name,content,price) VALUES('$name','$content',$price)";
//     if(mysqli_query($con, $sql))
//     {
//         echo "success!";
//     }
    if(mysqli_query($con,$sql)){
        echo "<script>alert('add success!');window.location.href='manage.php';</script>";
    }else{
        echo "<script>alert('add failed!');window.location.href='manage.php';</script>";
    
    }
