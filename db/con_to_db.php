<?php

	$conn = mysql_connect("localhost","root","root");
	if ($conn)
	{
		mysql_select_db("indianbooks", $conn);
	}
	else
	{
		echo "<script>alert('Database Error!');</script>;";
	}
?>