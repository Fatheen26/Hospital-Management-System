
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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Doctor details
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                
                      <div class="col-lg-6">

                        <form role="form" method="post" action="trancD.php?action=add">
                            
                            
                            
							<div class="form-group">
                              <input class="form-control" placeholder="password" name="password">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="Doctor ID" name="doctorId">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="First name" name="doctorFirstName">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="last name" name="doctorLastName">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="Address" name="doctorAddress">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="phone" name="doctorPhone">
                            </div>
							
                            <div class="form-group">
                              <input class="form-control" placeholder="doctorEmail" name="doctorEmail">
                            </div> 
							<div class="form-group">
                              <input type="date" class="form-control" placeholder="doctor Dob" name="doctorDOB">
                            </div> 
                            
                           
                            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


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

</html>

