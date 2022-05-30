<?php 
	require('db.php');
	include('add_leave.php');	
	$id=$_GET['ID'];
	$emp_id=$_SESSION['emp_id'];//null;
	 //if(isset($_POST['submit']))
	//{
	//  $emp_id=$_POST['emp_id'];
    //}
	
	
						  
	$emp_id=$_SESSION['emp_id'];//null;
 

  $query = "SELECT sum(days) from leave_details where status='approved' and emp_id=$emp_id";
  $results1 = mysqli_query($connection, $query) or die(mysqli_error());
  $row = mysqli_fetch_array($results1);
  $total1 = $row[0];
  
  if($total1==20)
  {	  ?>
    <script>
      alert('Cannot Approve. Leaves over');
     window.location.href='home_employee.php';
    </script>
    <?php 
  }
  else
  {
	$query = "UPDATE leave_details SET status='approved' WHERE ID=$id"; 
	//$query1 = "UPDATE employee SET days_leave='$days' WHERE emp_id=$emp_id"; 
	$result = mysqli_query($query) or die ( mysqli_error());
	//$result1 = mysql_query($query1) or die ( mysqli_error());
	header("Location: home_employee.php"); 
  }
 ?>
