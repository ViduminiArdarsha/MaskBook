<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Another website</title>
    </head>
  <body style="background-color:black;">

  <?php
 include_once('header.php');
 ?>

      
  <div class="container bg-light p-3 pt-4 pb-4 w-50 mt-5" style="border-radius:20px;">
  <form method="POST" action="dbh/login.php">
  <div class="mb-3 text-center"> 
   <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
  </svg>
   </div>
   
   <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Email address</label>
     <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required onkeyup="hideError()">
  
   </div>
   <div class="mb-3">
     <label for="exampleInputPassword1" class="form-label">Password</label>
     <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required onkeyup="hideError()">
   </div>

  <button type="submit" class="btn btn-dark">login</button>
  <a href="signup.php" class="btn btn-outline-dark">signup</a>


<?php
if (isset($_GET['success'])) {  echo("<div class='alert alert-success mt-3' role='alert'id='success'>
             Signup Successful. Please Login
            </div>");
}

if (isset($_GET['error'])) {  echo("<div class='alert alert-danger mt-3' role='alert'id='error'>
                     Invalid Login
                    </div>");
}



?>
<script>
function hideError(){
document.getElementById("error").style.visibility="hidden";
}
</script>



</form>
</div>
   
 
  

 
     
     
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>