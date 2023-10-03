<?php
include('../Models/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="icon" href="../../img/logo/1.png" type="image/png">
  <title>Login</title>
</head>

<body>
  <div class="header">

  </div>
  <div class="main">
    <section class="gradient-form" style="background-color: #ffffff;">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="card rounded-3 text-black">
          <div class="row g-5">
            <div class="col-lg-6">
              <div class="card-body p-md-3 mx-md-4">

                <div class="text-center">
                  <img src="../../img/logo/1.png" style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Miniluxe</h4>
                </div>

                <form action="" method="POST" >
                  <p>Do you want to buy our Products?</p>
                  <div class="form-outline mb-4">
                    <input type="text" id="username" class="form-control" name="username" placeholder="Username" required/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required/>
                    <br>
                    <a class="text-muted text-black" href="#!">Forgot password?</a>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="btn"
                      value="Sign in" />
                  </div>

                </form>
                <div class="d-flex align-items-center justify-content-center pb-4">
                  <p class="mb-0 me-2">Don't have an account?</p>
                  <a class="btn btn-outline-danger" href="register.php">Create new</a><br>
                </div>

                <div class="d-flex align-items-center justify-content-center pb-4">
                  <a class="text-muted" href="#!">Manage subscriptions</a>
                </div>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Do you want to Book an Appointment?</h4>
                <button type="button" class="btn-book-now text-white">Book Now</button>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
  <div class="footer">

  </div>
  
  <?php
  if (isset($_POST["btn"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    $query = "SELECT * FROM users WHERE userName='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
  
    if ($result->num_rows > 0) {
      header("Location: home.php");
      exit();
    } else {
      echo "<script>alert('Username or password is incorrect');</script>";
    }
  }
  ?>
</body>

</html>