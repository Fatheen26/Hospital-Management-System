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
$query = 'SELECT * FROM admin
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['id'];
                $i= $row['Fullname'];
                $a=$row['address'];
				   $x=$row['age'];
				  $u=$row['phonenumber'];
				  $v=$row['Email'];
				  $n=$row['username'];
				  $w=$row['Password'];
				  
                
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Full name" name="Fullname" value="<?php echo $i; ?>">
                            </div>
							 <div class="form-group">
                              <input class="form-control" placeholder="Address" name="address" value="<?php echo $a; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="Age" name="age" value="<?php echo $x; ?>">
                            </div>
							 <div class="form-group">
                              <input class="form-control" placeholder="Phone number" name="phonenumber" value="<?php echo $u; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="Email " name="Email" value="<?php echo $v; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="Username " name="username" value="<?php echo $n; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="Password " name="Password" value="<?php echo $w; ?>">
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
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>



</body>


  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>