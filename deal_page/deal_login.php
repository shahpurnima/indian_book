<?php
session_start();
?>

<?php
include("../db/con_to_db.php");
if (isset($_POST['username']) and isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$select_user = mysql_query("select * from tb_user where username='" . $_POST['username']."' and password ='".$_POST['password']."'", $conn);
	if (mysql_num_rows($select_user) == 1)
	{
		$array = mysql_fetch_array($select_user);
		$_SESSION['user'] = $_POST['username'];
		//$_SESSION['headpic'] = 
		echo "<script>alert('Login Succeed!'); window.location.href='../index.php';</script>";
	}
	else
	{
		echo "<script>alert('Login Fail!'); window.location.href='../index.php';</script>";
	}
}
?>

