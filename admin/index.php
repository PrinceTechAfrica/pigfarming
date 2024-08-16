<?php
  session_start();
 session_unset(); 
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link,$sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if username exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: account/");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
 
 

 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link href="fontawesome/css/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome/css/brands.css" rel="stylesheet" type="text/css"/>       
        <link href="fontawesome/css/solid.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
		#loader {
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			width: 100%;
			background: rgba(0, 0, 0, 0.75) ;
			z-index: 10000;
		}
	</style>
  
        
</head>

<div class="" style="background-color:ash">
  <div class="m-2">
  <div class="row">
      <div class="col-md-12 ">

      

      </div>
    </div>
    <div class="row">
      <div class="col-md-7 mx-auto " style="padding:10%">
        <form class="card p-1" id="form_log" name="form_log"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="row">

            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">
                  <h3> <i class="fa fa-user-circle"></i> Admin- login</h3>
                </label>
                <hr>
              </div>


            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating"><i class="fa fa-user"></i> Username</label>
                  <input type="text" class="form-control" id="username" name="username" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="bmd-label-floating"><i class="fa fa-lock"></i> Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mx-auto">
                <div class="form-group">
                <input type="hidden" class="form-control"  name="log" >
                <button type="submit" class="btn btn-primary form-control " name="submit" style="background-color:blue;">Login</button>
                </div>
              </div>
            </div>
            <div class="col-md-6 mx-auto">
          <p id="msg" style="display:none; margin: 10px" class="alert alert-danger "></p>
        </div>
        </form>
        <a href="account/registration.php" class="float-right"><b> Create Account </b><i class="fa fa-arrow-alt-circle-right"></i></a>
      <a href="" >
        <b> Forgot Password? </b>
      </a>

      </div>
     

      <div id="loader">
          <span class="fa fa-5x fa-spinner fa-spin text-warning"></span>
        </div>

      <div class="clearfix"></div>
    </div>

  </div>

</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/custom.js"></script>
	
</body>

</html>