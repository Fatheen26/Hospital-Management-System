<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$id = $_POST['id'];
			$password = $_POST['password'];
		    $doctorId = $_POST['doctorId'];
	        $doctorFirstName = $_POST['doctorFirstName'];
			$doctorLastName = $_POST['doctorLastName'];
	        $doctorAddress = $_POST['doctorAddress'];
	        $doctorPhone = $_POST['doctorPhone'];
	        $doctorEmail = $_POST['doctorEmail'];
	$doctorDOB = $_POST['doctorDOB'];
			
			
	   include('connection.php');
		
	 			$query = 'UPDATE doctor set  password ="'.$password.'",
					doctorId ="'.$doctorId.'", doctorFirstName="'.$doctorFirstName.'", doctorLastName ="'.$doctorLastName.'",  doctorAddress ="'.$doctorAddress.'", doctorPhone ="'.$doctorPhone.'", doctorEmail ="'.$doctorEmail.'" WHERE
					id ="'.$id.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index2.php";
		</script>
 </body>
</html>