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
                        <h2>List of Records</h2> <a href="addD.php" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                       
                                        <th>password</th>
										<th>doctorId</th>
										<th>firstName</th>
										<th>Last Name</th>
										<th>Address</th>
                                        <th>phone</th>
										<th>Email</th>
										<th>DOB</th>
										
										
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM doctor';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            
                            echo '<td>'. $row['password'].'</td>';
                            echo '<td>'. $row['doctorId'].'</td>';
							echo '<td>'. $row['doctorFirstName'].'</td>';
							echo '<td>'. $row['doctorLastName'].'</td>';
							echo '<td>'. $row['doctorAddress'].'</td>';
							echo '<td>'. $row['doctorPhone'].'</td>';
							echo '<td>'. $row['doctorEmail'].'</td>';
							echo '<td>'. $row['doctorDOB'].'</td>';
                            
                            
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="editD.php?action=edit & id='.$row['id'] . '"> EDIT </a> </td>';
                            echo '<td> <a  type="button" class="btn btn-xs btn-danger" href="delD.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
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