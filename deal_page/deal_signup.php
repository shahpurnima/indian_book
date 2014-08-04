<?php
include("../db/con_to_db.php");
if (isset($_POST['Submit']) and $_POST['Submit'] == "Sign Up")
{
	$username = $_POST['username'];
	//$realname = $_POST['realname'];
	$password = $_POST['password'];
	//$gender   = $_POST['gender'];
	//$phonenum = $_POST['phonenum'];
	$email    = $_POST['email'];
	//$qqnum    = $_POST['qqnum'];
//	$address  = $_POST['address'];
//	$headpic  = $_POST['headpic']; 

	if ($_POST['password'] == $_POST['password_confirm'])
	{
		$insert = mysql_query("insert into login_details(UserName, Password, Email) values('$username', '$password','$email')", $conn);
		if($insert)
		{
			session_start();
			$_SESSION['user'] = $_POST['username'];
			echo "<script>alert('Congratulation! You are a member now.');window.location.href='../index.php';</script>;";		
		}
		else
		{
			echo "<script>alert('Fail to Sign Up, Sorry!');window.location.href='../index.php';</script>;";
		}		
	}
	else
	{
		echo "<script>alert('The passwords don't match！');window.location.href='../signup.php';</script>;";
	}
}
else
{
	if (isset($_GET['username']))
	{
		$username = $_GET['username'];
		$email    = $_GET['email'];
		$finds    = mysql_query("select * from tb_user where username='" . $_GET['username']."'", $conn);
		if (mysql_num_rows($finds) >= 1)
		{
			$response = "N";
		}
		else
		{
			$response = "Y";
		}
		echo $response;
	}
}
?>















