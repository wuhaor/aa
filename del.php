<?php
				session_start(); 
				include("conn.php");
				$us=$_SESSION['userid'];
				$stri=$_GET['muid'];
				$sqll="delete from collect where Uid='".$us."' and Sid='".$stri."'";
				$sqlli=mysqli_query($link,$sqll);
				mysqli_close($link);
		?>