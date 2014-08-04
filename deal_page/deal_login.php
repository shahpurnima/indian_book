<?php
session_start();
?>

<?php
include("../db/con_to_db.php");
if (isset($_POST['username']) and isset($_POST['password']))
{
	$username = $_POST['username'];
    //$username = "purnima";
	$password = $_POST['password'];
	//$password = "purnima";
    $select_user = mysql_query("select * from login_details where UserName='" . $_POST['username']."' and Password ='".$_POST['password']."'", $conn);
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

