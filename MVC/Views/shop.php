<?php
include('../Models/database.php');

$limit = 8;

$page = isset($_GET['page']) && $_GET['page'] >= 1 && is_numeric($_GET['page']) ? $_GET['page'] : 1;

$offset = $limit * ($page - 1);

$categoryID = $_GET['CategoryID'];
$sql = "SELECT * FROM Categories WHERE CategoryID = $categoryID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $categoryName = $row['CategoryName'];
} else {
  $categoryName = "Category not found";
}

$sqlProducts = "SELECT ProductID, ProductName, Price, ImageURL FROM Products WHERE CategoryID = $categoryID LIMIT $limit OFFSET $offset";
$resultProducts = $conn->query($sqlProducts);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop - Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/home.css">
  <link rel="icon" href="../../img/Logo_icon2/1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <style>
    .card-img-top {
      max-width: 100%;
      height: auto;
    }

    .container {
      margin-top: 50px;
    }

    .btn-next-prev {
      margin-right: 5px;
      background-color: gray;
      color: white;
    }

    .btn-next-prev:hover {
      background-color: darkgray;
    }

    .dropdown-item:active {
      background-color: #dca8a8;
    }

    .card-title {
      text-decoration: none;
      font-size: 17px;
    }
  </style>
</head>

<body>
  <!-- header -->
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
          <div class="col-md-5 d-none d-md-block">
            <div class="row">
              <div class="col-md-4 "><a href="book_now.php"><button type="button"
              class="text-white btn-book-now">BOOK NOW</button></a></div>
              <div class="col-md-8 pt-1 p-0 lh-lg"><a href="service.php" style="text-decoration: none; color: black"> SERVICE</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pt-1 fs-2 text-center">
            <a href="home.php" style="text-decoration: none; color: black; font-size:40px"><span>NAIL SPA</span></a>
          </div>
          <div class="col-md-5 d-none d-md-block">
            <div class="row">
              <div class="col-md-6 text-end lh-lg"><a href="about_us.php" style="text-decoration: none; color: black">About Us</a>
              </div>
              <div class="col-md-2">
                <a href="login.php" style="text-decoration: none; color: black">
                  <p class="m-0 p-0 fs-5"><i class="bi bi-person-circle"></i></p>
                </a>
              </div>
              <div class="col-md-2">
                <a href="" style="text-decoration: none; color: black">
                  <p class="m-0 p-0 fs-5"><i class="bi bi-search"></i></p>
                </a>
              </div>
              <div class="col-md-2">
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
                      echo '<a class="nav-link"   href="Shop.php?CategoryID=' . $row['CategoryID'] . '">' . $row['CategoryName'] . '</a>';
                      echo '</li>';
                    }
                  }
                  ?>
                </ul>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="library.php">Nairl Art</a>
              </li>
              <!-- <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="#">Gift Card</a>
              </li> -->
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="policies.php">Policies</a>
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="our_difference">Our difference</a>
              </li>

              <li class="nav-item dropdown px-2">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
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
    <!-- body -->

    <div class="container-fluid p-4 text-center" id="product-list" style="background-color: #fff">
      <h1>
        <?php echo $categoryName; ?>
      </h1>
      <div class="container">
        <div class="row">
          <?php
          if ($resultProducts->num_rows > 0) {
            while ($rowProduct = $resultProducts->fetch_assoc()) {
              $productId = $rowProduct["ProductID"];
              $productName = $rowProduct["ProductName"];
              $price = $rowProduct["Price"];
              $imageURL = $rowProduct["ImageURL"];
              echo '<div class="col-md-3 mb-4">
                    <div  class="card">
                    
                        <img src="' . $imageURL . '" class="card-img-top" alt="' . $productName . '">
                        <div class="card-body">
                        <a href="product_detail.php?ProductID=' . $productId . '" class="card-title"><b>' . $productName . '</b></a>
                            <p class="card-text">$' . $price . '</p>
                        </div>
                    </div>
                </div>';
            }
          } else {
            echo "No products found.";
          }
          ?>
        </div>
      </div>
      <div class="text-center mt-4">
        <?php
        if ($page > 1) {
          echo '<a href="Shop.php?CategoryID=' . $categoryID . '&page=' . ($page - 1) . '#product-list" class="btn btn-next-prev">Previous</a>';
        }

        echo '<a href="Shop.php?CategoryID=' . $categoryID . '&page=' . $page . '#product-list" class="btn btn-next-prev">' . $page . '</a>';

        if ($resultProducts->num_rows == $limit) {
          $nextPage = $page + 1;
          echo '<a href="Shop.php?CategoryID=' . $categoryID . '&page=' . $nextPage . '#product-list" class="btn btn-next-prev">Next</a>';
        }
        ?>
      </div>
      <?php
      $conn->close();
      ?>
    </div>
    <!-- footer -->
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
                <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username"
                  aria-describedby="button-addon2">
                <button style="margin-left: 10px;" class=" btn-outline-secondary btn-light caption" type="button"
                  id="button-addon2">Subscribe</button>
              </div>
              </p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 my-4">
              <div class="row">
                <div class="col-md-6">
                  <ul style="list-style-type: none;">
                    <li class="my-2"><a href="shop.php" style="text-decoration: none; color: #fff">SHOP</a></li>
                    <li class="my-2"><a href="location.php" style="text-decoration: none; color: #fff">LOCATIONS</a>
                    </li>
                    <li class="my-2"><a href="service.php" style="text-decoration: none; color: #fff">SERVICES</a></li>
                    <!-- <li class="my-2"><a href="" style="text-decoration: none; color: #fff">GIFT CARDS</a></li> -->
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul style="list-style-type: none;">
                    <li class="my-2"><a href="about_us.php" style="text-decoration: none; color: #fff">ABOUT US</a></li>
                    <li class="my-2"><a href="contact_us.php" style="text-decoration: none; color: #fff">CONTACT US</a>
                    </li>
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

</body>

</html>