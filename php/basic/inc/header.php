<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container">
          <a class="navbar-brand text-light" href="/">PHP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
              <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
              <a class="nav-link text-light" href="./login.php">Login</a>
              <a class="nav-link text-light" href="#">Register</a>
              <?php if(isset($_SESSION["auth"])){?>
                <a class="nav-link text-light" href="/logout.php">Logout</a>
              <?php }?>
            </div>
          </div>
        </div>
</nav>


