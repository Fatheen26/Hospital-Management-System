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
                        <h2>List of Records</h2> <a href="add.php" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                         <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Full name</th>
                                        <th>address</th>
										<th>Age</th>
                                        <th>Phone number</th>
										 <th>Email</th>
										 <th>password</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM admin';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Fullname'].'</td>';
                            echo '<td>'. $row['address'].'</td>';
							echo '<td>'. $row['age'].'</td>';
                            echo '<td>'. $row['phonenumber'].'</td>';
							 echo '<td>'. $row['Email'].'</td>';
							 echo '<td>'. $row['Password'].'</td>';
                            
                            echo '<td> <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id='.$row['id'] . '" > SEARCH </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id='.$row['id'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=people&delete & id=' . $row['id'] . '">DELETE </a> </td>';
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