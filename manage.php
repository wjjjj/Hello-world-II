<?php
    require_once 'connect.php';
    $sql="SELECT * FROM library";
    //$temp�Ǹ�mysqli_result���͵ı���
    $temp=mysqli_query($con, $sql);
    //ͨ��mysqli_fetch_assoc���Խ�����$temp�е�id,name,content,price�ó�����ÿ��ȡ����һ��
    while($row=mysqli_fetch_assoc($temp))
    {
        //��ÿ��ȡ������һ�����ݷŵ�$data���鵱��
        $data[]=$row;
    }
    //��$data�е�ÿ��Ԫ��$everyData�е�name��price�����������
    foreach($data as $everyData)
    {
?>
        <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a>
<?php 
        echo $everyData['name'].": ".$everyData['price'];
        echo "<br>";
    }
    ?>