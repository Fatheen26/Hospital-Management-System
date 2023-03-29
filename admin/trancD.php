
<?php
       
       include('connection.php');
       include('includes/header.php'); 
include('includes/navbar.php'); 
       
        ?>   
<body>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           PHP CRUD <small>Create, Read, Update and Delete</small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                <?php
				
			
						
		    
			$password = $_POST['password'];
		    $doctorId = $_POST['doctorId'];
	        $doctorFirstName = $_POST['doctorFirstName'];
			$doctorLastName = $_POST['doctorLastName'];
	        $doctorAddress = $_POST['doctorAddress'];
	        $doctorPhone = $_POST['doctorPhone'];
	        $doctorEmail = $_POST['doctorEmail'];
	         $doctorDOB = $_POST['doctorDOB'];
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO doctor( password, doctorId,doctorFirstName,doctorLastName,doctorAddress,doctorPhone,doctorEmail,doctorDOB)
								VALUES ('".$password."','".$doctorId."','".$doctorFirstName."','".$doctorLastName."','".$doctorAddress."','".$doctorPhone."','".$doctorEmail."','".$doctorDOB."')";
								mysqli_query($db,$query)or die ('Error in updating Database');
							
						break;
									
						}
				?>
    	<script type="text/javascript">
			alert("Successfully added.");
			window.location = "index2.php";
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

