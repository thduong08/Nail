<?php
include('../Models/database.php');
?>

<?php
  if (isset($_POST["btn"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM users WHERE userName='$username'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $stored_hashed_password = $row['password'];

      if (password_verify($password, $stored_hashed_password)) {
        header("Location: home.php");
        exit();
      } else {
        echo "<script>alert('Username or password is incorrect');</script>";
      }
    } else {
      echo "<script>alert('Username or password is incorrect');</script>";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="../../img/logo/1.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <title>Account</title>
</head>

<body>
<nav class="navbar navbar-expand-lg " style="background-color: #dca8a8;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="text-warning h1">Mini</span>Luxe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <li><hr class="dropdown-divider"></li>
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
                <a href="" class="nav-link"
                  ><i class="bi bi-person-circle"></i
                ></a>
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
    
  <div class="content-for-layout focus-one">
    <section style="background-color: #ffffff">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="login-contrainer">
            <div class="booking-login">
              <div class="text-black                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               px-3 py-4 p-md-5 mx-md-4">
                <h2>Do you want to Book an Appointment?</h2>
                <button type="button" class="btn-book-now text-white">Book Now</button>
              </div>
            </div>
            <div class="customer-login">
              <div>
               
                  <form action="" method="POST" >
                  <h2>Do you want to buy our Products?</h2>
                    <div class="form-outline mb-4">
                      <input type="text" id="username" class="form-control" name="username" placeholder="Username" required/>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" class="form-control" name="password" placeholder="Password" required/>
                      <br>
                      <a class="text-muted text-black" href="forgotpassword.php">Forgot password?</a>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <input class="btn-book-now text-white mb-3" type="submit" name="btn"
                        value="Sign in" />
                    </div>

                  </form>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't you have an account?</p>
                    <a class="btn-book-now text-white" href="register.php">Create acount</a><br>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <a class="text-muted" href="#!">Manage subscriptions</a>
                  </div>
              </div>
            </div>

        </div>
    </section>
  </div>
  
  <footer class="py-3 my-4 " style="background-color: #dca8a8;">
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
  
</body>

</html>