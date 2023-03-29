
<?php
       
       include('connection.php');
       
       
        ?>  

<body>
<?php

	

			if (!isset($_GET['do']) || $_GET['do'] != 1) {
								
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM pharmacist
							WHERE
							id = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("Successfully Deleted.");
				window.location = "index1.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
<a href="Adminlog.php" class="dropdown-item">Admin</a>
								  <a href="men/login.php" class="dropdown-item">pharmacy</a>
								<a href="doctorappointmentsystem/index.php" class="dropdown-item">Doctor</a>
</html>