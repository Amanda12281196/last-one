<?php  
require_once('conn.php');  
$username = $_POST['name'];  
$info = $_POST['info'];  
$id = $_GET['id']; 
$sql = "update lo set username= '".$username."',info='".$info."' where id=".$id;  
mysql_query($sql);  
echo "<script>alert('修改成功！');location.href='index.php';</script>"; 
?> 