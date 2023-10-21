<?php
include('../Models/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/register.css">
  <link rel="icon" href="../../img/Logo_icon2/1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <style>
    .dropdown-item:active{
      background-color:#dca8a8;
    }
  </style>
</head>

<body>
<!--header-->
<section class="nail-header">
    <div class="nail-miniluxe header_pink">
      <div class="container-fluid text-white text-center" style="height: 30px; line-height:30px;">
        <p>FREE SHIPPING ON ORDERS $50+</p>
      </div>
    </div>

    <?php
    // Function to display error message
    function displayError($message)
    {
      echo "
          <div class='toast show text-center mx-auto' style='position: fixed; top: 0; left: 0; right: 0; z-index: 1000;'>
          <div class='toast-header'>
            <strong class='me-auto'>Error</strong>
            <button type='button' class='btn-close' data-bs-dismiss='toast'></button>
          </div>
              <div class='toast-body'>
              <span style='color: red;'>$message</span>
              </div>
          </div>";
      exit();
    } ?>

    <section class="nail-header">
      <div class="container-fluid py-3">
        <div class="row">
          <div class="col-sm d-none d-md-block">
            <div class="row">
              <div class="col-md-5 "><a href="book_now.php"><button type="button" class="text-white btn-book-now">BOOK
                    NOW</button></a></div>
              <div class="col-md-6 pt-1 p-0 lh-lg"><a href="service.php" style="text-decoration: none; color: black">
                  SERVICE</a></div>
            </div>
          </div>
          <div class="col-sm pt-1 fs-2 text-center">
            <a href="home.php" style="text-decoration: none; color: black;font-size: 40px"><span>NAIL SPA</span></a>
          </div>
          <div class="col-sm d-none d-md-block">
            <div class="row">
              <div class="col-sm" style="display: flex">
                <?php
                if (isset($_SESSION['username'])) {
                  echo '<div class="col-md-6 text-end lh-lg" style="text-decoration: none; color: black;white-space: nowrap;">Welcome, ' . $_SESSION['username'] . '!</div>';
                  echo '<a href="home.php?logout=1" style="text-decoration: none; color: black; margin-left: 50px">';
                  echo '<p class="m-0 p-0 fs-5"><i class="bi bi-box-arrow-right"></i></p>';
                  echo '</a>';
                } else {
                  echo '<a href="login.php" style="text-decoration: none; color: black>';
                  echo '<p class="m-0 p-0 fs-5"><i class="bi bi-person-circle"></i></p>';
                  echo '</a>';
                }
                ?>
              </div>
              <div class="col-sm">
                <a href="" style="text-decoration: none; color: black">
                  <p class="m-0 p-0 fs-5"><i class="bi bi-search"></i></p>
                </a>
              </div>
              <div class="col-sm">
                <a href="" style="text-decoration: none; color: black">
                  <p class="m-0 p-0 fs-5"><i class="bi bi-bag"></i></p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="nail-mainmenu" style="display: flex; justify-content: center; align-items: center;">
      <nav class="navbar navbar-expand-lg bg-body">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link dropdown-toggle" href="shop.php" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">Shop</a>
                <ul class="dropdown-menu">
                  <?php
                  $sql = "SELECT * FROM Categories";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo '<li class="dropdown-item">';
                      echo '<a class="nav-link" href="Shop.php?CategoryID=' . $row['CategoryID'] . '">' . $row['CategoryName'] . '</a>';
                      echo '</li>';
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="library.php">Nairl Art</a>
              </li>
              <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="#">Gift Card</a>
            </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="policies.php">Policies</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="our_difference.php">Our difference</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="about_us.php">About Us</a>
              </li>

              <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="location.php">Location</a></li>
                  <li><a class="dropdown-item" href="contact_us.php">Contact us</a></li>
                  <li><a class="dropdown-item" href="FAQ.php">FAQ</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    </div>

    <hr>

    <div class="content-for-layout focus-one">
      <div id="wropper bg-success" style="background-color: #ffffff;">
        <div class="regiter-container">
          <div class="row justify-content-around">

            <h1 class="text-center text-uppercase h3 py-1 ">Create Acount</h1>
            <form action="" class="col-md-5 bg -light p-3 my-1" method="POST">

              <div class="form-group mb-4">
                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name"
                  required>
              </div>
              <div class="form-group mb-4">
                <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" required>
              </div>
              <div class="form-group mb-4">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                  title="Please enter a valid Gmail address" required>
              </div>
              <div class="form-group mb-4">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" pattern="[0-9]{10}"
                  title="Phone number must be exactly 10 digits" required>
              </div>

              <div class="form-group mb-4">
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required
                  pattern="[a-zA-Z0-9]{6,20}"
                  title="Username must be 6-20 characters and contain no spaces or special characters." />
              </div>
              <div class="form-group mb-4">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                  required>
              </div>
              <div class="form-group mb-4">
                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                  placeholder="Confirm Password" required>
              </div>
              <div class="text-center pt-1 mb-1 pb-1">
                <input class="create-register text-white mb-3" type="submit" name="btn" value="Create" />
              </div>
            </form>
            <div class="d-flex align-items-center justify-content-center pb-4">
              <p class="mb-0 me-2">Do you have an account?</p>
              <a class="create-register text-white" href="login.php">Sign in</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--footer-->
<footer class="footer" style="color: #fff">
  <section class="nail-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 my-3">
          <h3 class="p-0 m-0"><span class="fs-1">NAIL SPA</h3>
          <p class="p-0 m-0">Get email updates on all things nails, evens, products and</p>
          <p class="p-0 m-0">launches. No strings attached-you can unsubscribe at any time</p>
          <p>
          <div class="" style="display:flex">
            <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button style="margin-left: 10px;" class="btn-outline-secondary btn-light caption" type="button" id="button-addon2">Subscribe</button>
          </div>
          </p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 my-4" >
          <div class="row">
            <div class="col-md-6">
              <ul style="list-style-type: none;">
                <li class="my-2" ><a href="shop.php" style="text-decoration: none; color: #fff">SHOP</a></li>
                <li class="my-2"><a href="location.php" style="text-decoration: none; color: #fff">LOCATIONS</a></li>
                <li class="my-2"><a href="service.php" style="text-decoration: none; color: #fff">SERVICES</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">GIFT CARDS</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul style="list-style-type: none;">
                <li class="my-2"><a href="about_us.php" style="text-decoration: none; color: #fff">ABOUT US</a></li>
                <li class="my-2"><a href="contact_us.php" style="text-decoration: none; color: #fff">CONTACT US</a></li>
                <li class="my-2"><a href="FAQ.php" style="text-decoration: none; color: #fff" >FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  </footer>


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- <script type="text/javascript" src="./js/home.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


    <?php


    if (isset($_POST["btn"])) {
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $username = $_POST["username"];
      $password = $_POST["password"];
      $confirm_password = $_POST["confirm_password"];

      // Check if email exists
      if (checkExists($conn, 'email', $email)) {
        displayError("Email already exists. Please choose another email.");
      }
      // Check if phone number exists
      if (checkExists($conn, 'phone', $phone)) {
        displayError("Phone number already exists. Please choose another phone number.");
      }
      // Check if username exists
      if (checkExists($conn, 'username', $username)) {
        displayError("Username already exists. Please choose another username.");
      }
      // Validate password strength
      if (strlen($password) < 8 || strlen($password) > 36 || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password) || !preg_match('/\d/', $password)) {
        displayError("Password must be between 8 and 36 characters and contain at least one special character and one number.");
      }
      // Validate password and confirm password match
      if ($password !== $confirm_password) {
        displayError("Passwords do not match. Please re-enter passwords.");
      }

      // Password encryption
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);

      // Insert user into the database
      $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, phone, username, password) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $firstname, $lastname, $email, $phone, $username, $hashed_password);

      if ($stmt->execute()) {
        echo '<script>alert("Registration successful, please log in again."); window.location.href = "login.php";</script>';
      } else {
        displayError("ERROR: " . $stmt->error);
      }

      $stmt->close();
      $conn->close();
    }
    // Function to check if a value exists in the database
    function checkExists($conn, $field, $value)
    {
      $stmt = $conn->prepare("SELECT * FROM users WHERE $field = ?");
      $stmt->bind_param("s", $value);
      $stmt->execute();
      $result = $stmt->get_result();
      $stmt->close();

      return ($result->num_rows > 0);
    }
    ?>
</body>


</html>