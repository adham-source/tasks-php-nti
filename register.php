<?php
  $titlePage = "Register";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Emilys+Candy&amp;family=Poppins:wght@400;600&amp;display=swap" />

    <!-- File CSS bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />

    <!-- Font awsesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

    <!-- File CSS -->
    <link rel="stylesheet" href="./assets/css/main.css" />
    <title><?php echo $titlePage; ?></title>
  </head>

  <body>
    <div class="container-fluid">

      <form class="form__register w-lg-50 px-3" action="check_reg.php" method="POST">
       
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Enter your name" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control form-control-lg" id="email" placeholder="name@example.com" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="userName">User Name</label>
          <input type="text" name="userName" class="form-control form-control-lg" id="userName" placeholder="Enter your user name" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control form-control-lg" id="phone" placeholder="+12345678941" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="url">URL Linkedin</label>
          <input type="text" name="url" class="form-control form-control-lg" id="url" placeholder="https://example.com" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="avatar">Image</label>
          <input type="file" name="avatar" class="form-control form-control-lg" id="avatar" autocomplete="off" >
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary d-block">Register</button>
        </div>
      </form>
    </div>

    <!-- File jQuer and bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
    <!-- File JS -->
    <script src="./assets/js/app.js"></script>
  </body>

</html>