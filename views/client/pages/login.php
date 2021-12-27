

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <style>
      <?php include "public/css/login.css" ?>
    </style>
</head>
<body>

<p class="back_post"> <a href="?controller=home&action=index">Back</a></p>

<h1 class="text-center  my-5  py-2">Admin login</h1>
<div class="body">
    <div class ="container">
        <div class = "row">
            <div class="col-sm-8 push-sm-2">
                    <form  class="p-5 border mb-5" method="POST" action="?controller=Admin&action=loginAdmin">
                    <div class="form-group">
                          <input type="text" class="form-control" name="username" placeholder="Username" required="required" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
                    </div>
                        <br>
                    <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Password" required="required" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                    </div>
                    <div>
                        <input type="checkbox" name="remember">
                        <label for="remember-me">Remember Me</label>
                    </div>
                         
                        <br>
                <button type="submit" name="submit" type="button" class="btn btn-outline-primary">Log in</button>
                
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>