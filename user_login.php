<?php
   session_start();
   include('includes/connection.php');
   if(isset($_POST['userLogin'])){
    $query="select * from users where email= '$_POST[email]' AND password = '$_POST[password]'";

    $query_run=mysqli_query($connection,$query);

    if(mysqli_num_rows($query_run)){

        while($row=mysqli_fetch_assoc($query_run)){
        $_SESSION['email']= $row['email'];
        $_SESSION['name']= $row['name'];
        $_SESSION['uid']= $row['uid'];


        }

   
        echo "<script type='text/javascript'>
        
        window.location.href='user_dashboard.php';
        </script>";
        

    }
    else{

        echo "<script type='text/javascript'>
        alert('Please enter correct email and password');
        window.location.href='user_login.php';
        </script>";

    }
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AST</title>
    <style type="text/css" media="screen">
     .lineUp {
  animation: 2s anim-lineUp ease-out infinite;
}
@keyframes anim-lineUp {
  0% {
    opacity: 0;
    transform: translateY(80%);
  }
  20% {
    opacity: 0;
  }
  50% {
    opacity: 1;
    transform: translateY(0%);
  }
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#fcde67">

    <div class="row d-flex justify-content-center align-items-center h-100" >
        <div class="col-md-9 col-lg-6 col-xl-5">
    
  <div class="message">
  <div class="line">
    <h1 class='lineUp text-center' style="font-size=2.5rem; padding-top: 5px;" >Attechx Serve Technology</h1>
  </div>
    
    
  </div>
</div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1" style="background-color:#fcde67">
      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start" style="padding-top:5%">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fa fa-google" style="color:yellow"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fa fa-facebook" style="color:yellow"></i>
            </button>

            <button type="button" class="btn btn-dark btn-floating mx-1">
              <i class="fa fa-linkedin" style="color:yellow"></i>
            </button>
          </div>
             <br>
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
         
           <br>
           <form  action ="" method = "post">
            <div class="form-group">
                <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter a valid email address" required>
                <label class="form-label" >Email address</label>
            </div>
            <br>
            <div class="form-group ">
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
                <label class="form-label" >Password</label>
            </div>
            <div class="form-group text-center text-lg-start mt-4 pt-2">
                <input type="submit" name="userLogin" value="Login" class="btn btn-dark" style="padding-left: 2.5rem; padding-right: 2.5rem; color:yellow">
                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
             </div>
             </form>
             
           
        </div>
    </div>




    
 



</body>
</html>