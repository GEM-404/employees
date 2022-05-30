<?php
  $conn = @mysqli_connect('localhost', 'root', 'root');
  if (!$conn)
  {
    die("Database Connection Failed" . mysqli_error());
  }

  $select_db = mysqli_select_db($conn, 'payroll');
  if (!$select_db)
  {
    die("Database Selection Failed" . mysqli_error());
  }
  

  if(isset($_POST['submit'])!="")
  {
    $lname      = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname      = mysqli_real_escape_string($conn, $_POST['fname']);
    $gender     = mysqli_real_escape_string($conn, $_POST['gender']);
	$contact    = mysqli_real_escape_string($conn, $_POST['contact']);
	$email      = mysqli_real_escape_string($conn, $_POST['email']);
	$dob        = mysqli_real_escape_string($conn, $_POST['dob']);
	$jdate      = mysqli_real_escape_string($conn, $_POST['jdate']);
	$address = isset($_POST['address']) ? $_POST['address'] : '';
    $city       = mysqli_real_escape_string($conn, $_POST['city']);
	$zip        = mysqli_real_escape_string($conn, $_POST['zip']);
	$country    = mysqli_real_escape_string($conn, $_POST['country']);
	$type       = mysqli_real_escape_string($conn, $_POST['emp_type']);
    $division   = mysqli_real_escape_string($conn, $_POST['division']);
	$password   = mysqli_real_escape_string($conn, $_POST['password']);
	$username   = mysqli_real_escape_string($conn, $_POST['username']);
	$basic_pay  = mysqli_real_escape_string($conn, $_POST['basic_pay']);
 
    $query = "INSERT into employee(lname, fname, gender,contact,email,dob,jdate,address,city,zip,country, emp_type, division, username, password, basic_pay)
	VALUES('$lname','$fname','$gender', '$contact','$email', '$dob', '$jdate', '$address', '$city', '$zip', '$country', '$type', '$division', '$username', '$password','$basic_pay')";
	
	$sql = mysqli_query($conn, $query);
	//echo $query;
	
	
    if($sql)
    {
      ?>
        <script>
            alert('Employee has been successfully added.');
            
        </script>
      <?php 
    }

    else
    {
      ?>
        <script>
            alert('Invalid.');
            
        </script>
      <?php 
    }
  }
?>
