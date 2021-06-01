<?php
error_reporting(0);
if (isset($_POST['numara'])) {
    $numara = $_POST['numara'];
    header("Location:https://wa.me/+90".$numara);
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark">
   <div class="container">
   <center>
   <br><br>
   <img width="150" src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c543.png" alt="">
   <br><br>
   <h3 style="color: white;">WhatsApp - Mesaj Gönder</h3>
   <hr class="bg-light">
   <br><br>

   <div id="alan">

   <form action="" method="post">

   <input class="form-control w-75" type="text" name="numara" placeholder="Lütfen Telefon Numarası Giriniz" require>
   <br>
  <button type="submit" class="btn btn-success btn-lg">Gönder</button>
   </form>
   </div>
   
   
   </center>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
