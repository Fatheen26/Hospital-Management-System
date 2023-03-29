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
                           Add admin login details
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                  <h2>Add new login details</h2>
                      <div class="col-lg-6">

                        <form role="form" method="post" action="transac.php?action=add">
                            
                            
                            <div class="form-group">
                              <input class="form-control" placeholder="full name" name="Fullname" value="username">
                            </div> 
							<div class="form-group">
                              <input class="form-control" placeholder="address" name="address">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="age" name="age">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="phone number" name="phonenumber">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="email" name="Email">
                            </div>
							<div class="form-group">
                              <input class="form-control" placeholder="username" name="password">
                            </div>
                            <div class="form-group">
                              <input class="form-control" placeholder="password" name="Password">
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

