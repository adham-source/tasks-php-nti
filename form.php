<?php
  $titlePage = "from-insert";

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
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title><?php echo $titlePage; ?></title>
  </head>

  <body>
    <div class="container-fluid">

      <form class="form__article w-lg-50 w-75" action="article.php" method="POST">
        <div class="form-group">
          <label for="titleEn">Enter Title</label>
          <input type="text" name="titleEn" class="form-control form-control-lg" id="titleEn" placeholder="Enter title" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="articleEn" >Enter discription</label>
          <textarea name="articleEn" class="form-control form-control-lg" id="articleEn" rows="3" placeholder="Write description..." autocomplete="off" ></textarea>
        </div>

        <div class="form-group">
          <label for="titleAr">أدخل عنوان</label>
          <input type="text" name="titleAr" class="form-control form-control-lg" id="titleAr" placeholder="أدخل عنوان" autocomplete="off" >
        </div>
        <div class="form-group">
          <label for="articleAr">اكتب وصف</label>
          <textarea name="articleAr" class="form-control form-control-lg" id="articleAr" rows="3" placeholder="اكتب وصف..." autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send / إرسال</button>
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