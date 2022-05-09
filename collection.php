<?php
				session_start(); 
				include("conn.php");
				$us=$_SESSION['userid'];
				$stri=$_GET['muid'];
                $sqll="insert into collect (Sid,Uid) value('".$stri."','".$us."')";
				$sqlli=mysqli_query($link,$sqll);
				mysqli_close($link);
		?>