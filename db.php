<?php
	$connection = @mysqli_connect('localhost', 'root', 'root');

	if (!$connection)
	{
		die("Database Connection Failed" . mysqli_error());
	}

	$select_db = mysqli_select_db($connection, 'payroll');
	if (!$select_db)
	{
		die("Database Selection Failed" . mysqli_error());
	}
?>
