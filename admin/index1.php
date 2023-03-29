<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
include('connection.php');
       
?>


<!-- Begin Page Content -->
<body>

   

	  <!-- Navigation -->
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                        <h2>List of Records</h2> <a href="addph.php" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Licence Number</th>
										<th>Age</th>
										<th>Address</th>
										<th>Phone Number</th>
                                        <th>Email</th>
										<th>Password</th>
										
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM pharmacist';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['fullname'].'</td>';
                            echo '<td>'. $row['lNO'].'</td>';
                            echo '<td>'. $row['age'].'</td>';
							echo '<td>'. $row['address'].'</td>';
							echo '<td>'. $row['phoneNo'].'</td>';
							echo '<td>'. $row['email'].'</td>';
							echo '<td>'. $row['password'].'</td>';
                            
                            
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="editP.php?action=edit & id='.$row['id'] . '"> EDIT </a></td> ';
                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="delP.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
									
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script> -->


 
</body>








  <?php
include('includes/scripts.php');

?>