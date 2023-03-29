
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
				
			$fullname = $_POST['Fullname'];
		    $address = $_POST['address'];
	        $age = $_POST['age'];
			$phone = $_POST['phonenumber'];
	        $Email = $_POST['Email'];
		    $username = $_POST['username'];
	        $Password = $_POST['Password'];
						
				
					switch($_GET['action']){
						case 'add':			
								$query = "INSERT INTO admin
								(Fullname, address, age,phonenumber,Email,username,Password)
								VALUES ('".$fullname."','".$address."','".$age."','".$phone."','".$Email."','".$username."','".$Password."')";
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

