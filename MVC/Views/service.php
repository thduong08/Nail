<?php
include('../Models/database.php');
session_start();
$_SESSION['return_to'] = $_SERVER['REQUEST_URI']; // Store the current URL
if (isset($_GET['logout'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service - Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/service.css">
  <link rel="icon" href="../../img/Logo_icon2/1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
 <!--header-->
 <section class="nail-header">
    <div class="nail-miniluxe header_pink">
      <div class="container-fluid text-white text-center" style="height: 30px; line-height:30px;">
        <p>FREE SHIPPING ON ORDERS $50+</p>
      </div>
    </div>
    </div>

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
              <div class="col-sm">
              </div>
              <div class="col-sm" style="display: flex">
                <?php
                if (isset($_SESSION['username'])) {
                  echo '<div class="col-md-6 text-end lh-lg" style="text-decoration: none; color: black;white-space: nowrap;">Welcome, ' . $_SESSION['username'] . '!</div>';
                  echo '<a href="home.php?logout=1" style="text-decoration: none; color: black; margin-left: 50px">';
                  echo '<p class="m-0 p-0 fs-5"><i class="bi bi-box-arrow-right"></i></p>';
                  echo '</a>';
                } else {
                  echo '<a href="login.php" style="text-decoration: none; color: black;>';
                  echo '<p class="m-0 p-0 "><i class="bi bi-person-circle fs-5" style="text-decoration: none; color: black"></i></p>';
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
                <a href="view_cart.php" style="text-decoration: none; color: black">
                  <p class="m-0 p-0 fs-5"><i class="bi bi-bag"></i></p>
                  (<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item px-2">
                <a class="nav-link dropdown-toggle" href="shop.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
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


<!--body-->
<div class="mani card mb-3 py-3" style="max-width: 100%;">
  <div class="row g-0">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mani</h5>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Get mani</td>
      <td>55$</td>
      <td>45p</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Mani</td>
      <td>25$</td>
      <td>30p</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mani polish change</td>
      <td>15$</td>
      <td>15p</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Dip powder mani</td>
      <td>60$</td>
      <td>60p</td>
    </tr>

  </tbody>
</table>
      </div>
      <div class="card-body">
        <h5 class="card-title">Pedi</h5>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Get pedi</td>
      <td>72$</td>
      <td>45p</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Pedi</td>
      <td>52$</td>
      <td>30p</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Pedi polish change</td>
      <td>20$</td>
      <td>15p</td>
    </tr>
  </tbody>
</table>
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
              <div class="mb-3" style="display:flex">
                <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button style="margin-left: 10px;" class=" btn-outline-secondary btn-light caption" type="button" id="button-addon2">Subscribe</button>
              </div>
              </p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 my-4">
              <div class="row">
                <div class="col-md-6">
                  <ul style="list-style-type: none;">
                    <li class="my-2"><a href="http://localhost/Project_nailart/MVC/Views/Shop.php?CategoryID=1location.php" style="text-decoration: none; color: #fff">SHOP</a></li>
                    <li class="my-2"><a href="service.php" style="text-decoration: none; color: #fff">SERVICES</a></li>
                    <li class="my-2"><a href="location.php" style="text-decoration: none; color: #fff">LOCATIONS</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul style="list-style-type: none;">
                    <li class="my-2"><a href="about_us.php" style="text-decoration: none; color: #fff">ABOUT US</a></li>
                    <li class="my-2"><a href="contact_us.php" style="text-decoration: none; color: #fff">CONTACT US</a></li>
                    <li class="my-2"><a href="FAQ.php" style="text-decoration: none; color: #fff">FAQ</a></li>
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
  <script type="text/javascript" src="./js/home.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>