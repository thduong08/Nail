<?php
include('../Models/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <link rel="icon" href="../../img/logo/1.png" type="image/x-icon">
  <title>Create Account</title>
</head>

<body class="bg-info">
  <nav class="navbar navbar-expand-lg bg-danger-subtle">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-warning h1">Mini</span>Luxe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">BOOK NOW</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">NAIL ART</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PURE POLISH</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PURE POLISH</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MORE
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Gift Card</a></li>
              <li><a class="dropdown-item" href="#">Policies</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Our Difference</a></li>
            </ul>
          </li>
        </ul>
        <div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link " href="#services">About Us</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link"><i class="bi bi-person-circle"></i></a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link"><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link"><i class="bi bi-bag"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div id="wropper bg-success">
    <div class="container">
      <div class="row justify-content-around">
        <form action="" class="col-md-5 bg -light p-3 my-1" method="POST">
          <h1 class="text-center text-uppercase h3 py-1 ">Create Acount</h1><br>
          <div class="form-group">
            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" required>
          </div><br>
          <div class="form-group">
            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" required>
          </div><br>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
          </div><br>
          <div class="form-group">
            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" required>
          </div><br>
          <div class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
          </div><br>
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          </div><br>
          <input type="submit" name="btn" value="Create" class="btn-primary btn btn-block mb-3">
        </form>
      </div>
    </div>
  </div>

  <footer class="py-3 my-4 bg-danger-subtle">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-muted">BOOK NOW</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-muted">SERVICES</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-muted">NAIL ART</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-muted">NAIL CARE</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link px-2 text-muted">ABOUT</a>
      </li>
    </ul>
    <p class="text-center text-muted">
      58 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội
    </p>
    <p class="text-center text-muted">© 2023 Miniluxe, Inc</p>
  </footer>

  <?php

  if (isset($_POST["btn"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // check username
    if (strlen($username) < 6 || strlen($username) > 36) {
      echo "<script>alert('Username must be between 6 and 36 characters.');</script>";
      exit();
    }
    if (!ctype_alnum($username)) {
      echo "<script>alert('Username can only contain letters and numbers.');</script>";
      exit();
    }

    // Check password 
    if (strlen($password) < 8 || strlen($password) > 36 || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password) || !preg_match('/\d/', $password)) {
      echo "<script>alert('Password must be between 8 and 36 characters and contain at least one special character and one number.');</script>";
      exit();
    }

    // Password encrypted
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO users (firstname,lastname,email,phone,username,password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstname, $lastname, $email, $phone, $username, $hashed_password);

    if ($stmt->execute()) {
      echo "<script>alert('Registered successfully!');</script>";
    } else {
      echo "<script>alert('ERROR: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
  }
  ?>
</body>

</html>