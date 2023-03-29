<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			$zz = $_POST['id'];
			$fullname = $_POST['Fullname'];
		    $address = $_POST['address'];
	        $age = $_POST['age'];
			$phone = $_POST['phonenumber'];
	        $Email = $_POST['Email'];
	$username = $_POST['username'];
	        $Password = $_POST['Password'];
	
	
	
			
			
	   include('connection.php');
		
	 			$query = 'UPDATE admin set Fullname ="'.$fullname.'",
					address ="'.$address.'", age="'.$age.'" ,phonenumber="'.$phone.'" ,Email="'.$Email.'",username="'.$username.'", Password="'.$Password.'" WHERE id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>