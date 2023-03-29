
<?php
       
       include('connection.php');
       include('includes/header.php'); 
include('includes/navbar.php'); 
       
        ?>   
<body>

    <div id="wrapper">

        <!-- Navigation -->
       
        <div id="page-wrapper">

            <div class="container-fluid">

               


             <div class="col-lg-12">
                <?php
						
			$fullname = $_POST['fullname'];
		    $lno = $_POST['lNO'];
	        $age = $_POST['age'];
			$address = $_POST['address'];
	        $phoneNo = $_POST['phoneNo'];
	        $email = $_POST['email'];
	        $password = $_POST['password'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO pharmacist
								(fullname,lNO, age,address,phoneNo,email,password)
								VALUES ('".$fullname."','".$lno."','".$age."','".$address."','".$phoneNo."','".$email."','".$password."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index.php";
		</script>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

