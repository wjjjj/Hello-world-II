<?php
    require_once 'connect.php';
    //�˴���$name�ĳ�����ɾ����name
    $name1=$_GET['name'];
    $sql="DELETE FROM library WHERE name='$name1'";
    if(mysqli_query($con, $sql))
    {
       echo "<script>alert('add success!');window.location.href='manage.php';</script>";
    }else{
        echo "<script>alert('delete failed!');window.location.href='select.php';</script>";
    }