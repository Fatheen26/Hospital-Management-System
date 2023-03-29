<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connection.php'); 
?>

<body>
<div id="wrapper">

        <!-- Navigation -->
		
		
  
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Update login details
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
<?php 
$query = 'SELECT * FROM doctor
              WHERE
              idr ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['id'];
                $MLNo= $row['password'];
                $fn=$row['doctorId'];
				$ln=$row['doctorFirstName'];
				$sp=$row['doctorLastName'];
				$e=$row['doctorAddress'];
				$a=$row['doctorPhone'];
				$p=$row['doctorEmail'];
				  $pw=$row['doctorDOB'];
                
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1D.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="" name="password" value="<?php echo $MLNo; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="First Name" name="doctorId" value="<?php echo $fn; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="Last Name " name="doctorFirstName" value="<?php echo $ln; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="Specialization " name="doctorLastName" value="<?php echo $sp; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="phoneNo " name="doctorAddress" value="<?php echo $e; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="email " name="doctorPhone" value="<?php echo $a; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="Address " name="doctorEmail" value="<?php echo $p; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="password " name="doctorDOB" value="<?php echo $pw; ?>">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Update Record</button>
                         


                      </form>  
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


  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>