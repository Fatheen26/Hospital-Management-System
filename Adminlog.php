<?php 

include 'Config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: myTotebag.php");
}



if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: myTotebag.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap - Prebuilt Layout</title>

    <!-- Bootstrap -->
    <link href="css1/bootstrap-4.4.1.css" rel="stylesheet">

  </head>
  <body>
    

    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Admin login</p>

                <form class="mx-1 mx-md-4" action="Adminlog.php" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      
                      <input type="text" placeholder="username" name="username" class="form-control" value="<?php echo $username; ?>" required>
						
                    </div>
                  </div>

                  

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                     
                      <input type="password" placeholder="Password" name="password" class="form-control"   value="<?php echo $_POST['password'];  ?>"  required>
                    </div>
                  </div>

                  

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-inline" type="checkbox" value="" id="form2Example3c" required>
					  
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    
					 <button name="submit" class="btn btn-primary btn-lg">Sign in</button>
					  <br>
					  <button ><a href="index.html">BACK</a></button>
					   
                  </div>

                </form>
				  

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/team-2.jpg"
                  class="img-fluid" alt="Sample image">
				  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
		
		
</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>

