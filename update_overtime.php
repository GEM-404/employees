<?php
	
		require("db.php");
		
		@$id 			= $_POST['ot_id'];
		@$rate		= $_POST['rate'];


		$sql = mysqli_query($connection, "UPDATE overtime SET rate='$rate' WHERE ot_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Overtime rate successfully changed...');
		            window.location.href='home_salary.php';
		        </script>
		    <?php 
		}
		else {
			echo "Not Successfull!"; 
		}
 ?>
