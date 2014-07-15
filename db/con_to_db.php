<?php

	$conn = mysql_connect("database url","username","password");
	if ($conn)
	{
		mysql_select_db("db", $conn);
	}
	else
	{
		echo "<script>alert('Database Error!');</script>;";
	}
?>