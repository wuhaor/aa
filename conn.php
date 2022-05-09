<?php
$link=mysqli_connect("localhost","root","","music")or die("数据库服务器连接错误".mysql_error());
mysqli_query($link,"set names utf8");
?>