<?php
include 'partials/_dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Signup</title>
    
    
  </head>
  <body >
  
    <?php require 'partials/_nav.php'?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success</strong> Your account is now created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <div class ="container">
    <h1 class="text-center">Signup</h1>
    <form action="/IWT/signup.php" method="post">
    <form>
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="name" class="form-control" id="username" name="username">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cPassword" name="cpassword">
    <div id="emailHelp" class="form-text">Make sure you type the same password.</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Signup</button>
</form>
    </div>


    
  
  </body>
</html>
</body>
</html>