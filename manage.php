<?php
    require_once 'connect.php';
    $sql="SELECT * FROM library";
    //$temp是个mysqli_result类型的变量
    $temp=mysqli_query($con, $sql);
    //通过mysqli_fetch_assoc可以将放在$temp中的id,name,content,price拿出来，每次取出来一行
    while($row=mysqli_fetch_assoc($temp))
    {
        //将每次取出来的一行数据放到$data数组当中
        $data[]=$row;
    }
    //将$data中的每个元素$everyData中的name和price属性输出出来
    foreach($data as $everyData)
    {
?>
        <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a>
<?php 
        echo $everyData['name'].": ".$everyData['price'];
        echo "<br>";
    }
    ?>