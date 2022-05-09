<?php
 include("conn.php");
$user=$_POST["user"];
$pass=$_POST["pass"];
$sql=mysqli_query($link,"select * from users");
$row=mysqli_fetch_object($sql);
$i=0;
	do{
		$u=$row->Uid;
		$p=$row->Upassword;
	if(strcmp($u,$user)==0 and strcmp($p,$pass)==0) {++$i;}
	}while($row=mysqli_fetch_object($sql));
	if($i>0){
		session_start();
		$_SESSION['userid']=$user;
		echo"<script>alert('欢迎来到音乐的世界！');location.href='me.php'</script>";
		
	}
	else if($i==0){
		echo"<script>alert('用户名或密码错误！');location.href='index.php'</script>";
	}
	if($row){
	mysqli_free_result($row);}
	mysqli_close($link);
?>