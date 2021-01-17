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

    <title>login</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <div class ="container">
    <h1 class="text-center">Login</h1>
    <form action="/IWT/welcome.php" method="post">
    <form>
  <div class="mb-3 col-md-6">
    <label for="username" class="form-label">Username</label>
    <input type="name" class="form-control" id="username" name="username">
    
  </div>
  <div class="mb-3 col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">login</button>
</form>
    </div>
  </body>
</html>
</body>
</html>