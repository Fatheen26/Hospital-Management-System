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
$query = 'SELECT * FROM pharmacist
              WHERE
              id ='.$_GET['id'];
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
              while($row = mysqli_fetch_array($result))
              {   
                $zz= $row['id'];
                $fn= $row['fullname'];
                $ln=$row['lNO'];
				$a=$row['age'];
				$ad=$row['address'];
				$pn=$row['phoneNo'];
				$e=$row['email'];
				$p=$row['password'];
                
             
              }
              
              $id = $_GET['id'];
         
?>

             <div class="col-lg-12">
                  <h2>Edit Records</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="edit1p.php">
                            
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $zz; ?>" />
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="fullname" name="fullname" value="<?php echo $fn; ?>">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="lNo " name="lNO" value="<?php echo $ln; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="age " name="age" value="<?php echo $a; ?>">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="address " name="address" value="<?php echo $ad; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="phoneNo " name="phoneNo" value="<?php echo $pn; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="email " name="email" value="<?php echo $e; ?>">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="password " name="password" value="<?php echo $p; ?>">
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