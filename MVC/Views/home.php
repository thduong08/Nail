<?php
include('../Models/database.php');
session_start();
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
  <title>Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/home.css">
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
    <section class="nail-maincontent">
      <div class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../img/ảnh_thanh_trượt/anh5.jpeg" class="d-block w-100" alt="Wild Landscape" style="object-fit: cover; height: 500px;" />
              <div class="carousel-caption">
                <div class="mb-5">
                  <h1>Nail Your </h1>
                  <h1>Nail Narrative</h1>
                </div>

                <a href="book_now.php"><button type="button" class="btn-light caption">BOOK A SERVICE</button></a>
                <a href="http://localhost/Project_nailart/MVC/Views/Shop.php?CategoryID=2"><button type="button" class="btn-light caption">SHOP</button></a>
              </div>
            </div>

            <div class="carousel-item">
              <img src="../../img/ảnh_thanh_trượt/anh4.jpg" class="d-block w-100" alt="Camera" style="object-fit: cover;height: 500px;" />
              <div class="carousel-caption">
                <div class="mb-5">
                  <h1>Nail Your </h1>
                  <h1>Nail Narrative</h1>
                </div>

                <a href="book_now.php"><button type="button" class="btn-light caption">BOOK A SERVICE</button></a>
                <a href="http://localhost/Project_nailart/MVC/Views/Shop.php?CategoryID=2"><button type="button" class="btn-light caption">SHOP</button></a>
              </div>
            </div>

            <div class="carousel-item">
              <img src="../../img/ảnh_thanh_trượt/anh3.jpg" class="d-block w-100" alt="Exotic Fruits" style="object-fit: cover;height: 500px;" />
              <div class="carousel-caption">
                <div class="mb-5">
                  <h1>Nail Your </h1>
                  <h1>Nail Narrative</h1>
                </div>

                <a href="book_now.php"><button type="button" class="btn-light caption">BOOK A SERVICE</button></a>
                <a href="http://localhost/Project_nailart/MVC/Views/Shop.php?CategoryID=2"><button type="button" class="btn-light caption">SHOP</button></a>
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="nail-history">
        <div class="container-fluid text-center" style="padding-top:30px; padding-bottom:40px">
          <h1 class="pb-3">More than a Mani</h1>
          <p class="p-0 m-0">For 15 years and counting, we’ve been delivering the highest quality nail care and waxing
            services and</p>
          <p class="p-0 m-0">products. We’re committed to clean and better-for-you experiences that celebrate your
            self-expression,</p>
          <p class="p-0 m-0">empower our designers and positively change our industry - one mini moment at a time.</p>
        </div>
      </div>
      <div class="nail-product container-fluid">
        <div class="row">
          <div class="col-md-10">
            <h3 class="" style="padding-top:10px;padding-bottom:3px; color: black">Best Seller </h3>
          </div>
        </div>

        <div class="row product-slide">
          <?php
          $sql = "SELECT * FROM Products where ProductID <= 10 ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $productID = $row["ProductID"];
              $productName = $row["ProductName"];
              $price = $row["Price"];
              $OldPrice = $row["OldPrice"];
              $imageURL = $row["ImageURL"];
              echo '<div class="col-md-3 mb-4" style="margin: 50px 40px;">
              <a href="product_detail.php?ProductID=' . $productID . '">
                  <div class="card">
                      <img src="' . $imageURL . '" class="card-img-top img-fluid" alt="' . $productName . '">
                      <div class="card-body">
                          <h5><b>' . $productName . '</b></h5>
                          <p class="card-text">$' . $price . '</p>
                          <div class="col-md-6"><del>Price: $' . $OldPrice . '</del></div>
                      </div>
                  </div>
              </a>
          </div>';
            }
          } else {
            echo "No products found.";
          }
          ?>
        </div>

      </div>
      <div class="nail-certification" style="padding: 50px 32px 104px;
                                          max-width: 1440px;
                                          margin: 0 auto;">
        <h1 class="text-center" style="padding-top: 100px; padding-bottom: 50px;">Ingredients you can count on</h1>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="item">
                <div class="item-image">
                  <img src="//miniluxe.com/cdn/shop/files/8Free_black-300x300_715a315f-1200-40b2-b6a5-5d629a443050.png?crop=center&height=150&v=1643777937&width=150" alt="8-Free">
                </div>
                <div class="item-title">
                  <b>8-Free</b>
                </div>
                <div class="item-description">
                  <p class="card-text">Free of the eight most toxic ingredients in nail care.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item">
              <div class="item-image">
                  <img src="//miniluxe.com/cdn/shop/files/CrueltyFree_LeapingBunny-Black-300x300_0ec66e33-38d3-482e-9ef1-2a692ec4e0cf.png?crop=center&height=150&v=1643777999&width=150" alt="Cruelty Free">
                </div>
                <div class="item-title">
                <b>Cruelty Free</b>
                </div>
                <div class="item-description">
                  <p class="card-text">Cruelty-free and committed to never test on animals.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item">
              <div class="item-image">
                  <img src="//miniluxe.com/cdn/shop/files/ewgv_logo_black-300x300_7d091a1d-cd9a-4d20-a588-33d6531b28f9.png?crop=center&height=150&v=1643778011&width=150" alt="EWG Verified">
                </div>
                <div class="item-title">                 
                <b>EWG Verified</b>
                </div>
                <div class="item-description">
                  <p class="card-text">For our best-selling Nourishing Cuticle Oil Rollerball.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="item">
              <div class="item-image">
                  <img src="//miniluxe.com/cdn/shop/files/usa-black-300x300_d538f2b3-4e0b-42cf-bc60-74bcf8d24d08.png?crop=center&height=150&v=1643779424&width=150" alt="USA Made">
                </div>
                <div class="item-title">
                <b>USA Made </b>
                </div>
                <div class="item-description">
                  <p class="card-text">All of our products are made in the USA.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- about_us -->
      <div class="nail-story my-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <img style="height: 800px;width: 100%;
                        padding: 10px 0;
                        object-fit: cover" src="../../img/image_aboutus/story_aboutus.jpg" alt="">
            </div>
            <div class="col-md-6">
              <div style="padding-top: 320px; padding-left: 120px;">
                <h1 style="font-size:50px">Empowerment is Beautiful</h1>
                <p class="py-3" style="font-size:20px">Founded with a vision to radically change <br> an industry by
                  doing what is right, not <br> just what is standard.</p>
                <a href="about_us.php"><button type="button" class="btn-book-now rounded-5 fs-3">About Us</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- feedback -->
      <h1 class="text-center py-2">OUR THOUGHTS EXACTLY</h1>
      <div class="feedback">
        <div class="row product-slide">
          <?php
          if ($conn->connect_error) {
            die("Lỗi kết nối đến cơ sở dữ liệu: " . $conn->connect_error);
          }

          $sql = "SELECT username, content, created_at FROM Feedback";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $username = $row["username"];
              $content = $row["content"];
              $created_at = $row["created_at"];
          ?>
              <div class="col-md" style="margin: 50px 40px;">
                <div class="card feed_card">
                  <div class="card-body">
                    <h5 class="card-title feed_cardtitle">
                      <?php echo $username; ?>
                    </h5>
                    <p class="card-text">
                      <?php echo $content; ?>
                    </p>
                    <p><small class="text-body-secondary">Created at
                        <?php echo $created_at; ?>
                      </small></p>
                  </div>
                </div>
              </div>
          <?php
            }
          } else {
            echo "No feedback";
          }
          ?>
        </div>
      </div>
      <!-- location -->
      <div class="location py-3">
        <h1 class="text-center py-2">Find Nail Spa Near You</h1>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <h3>Our locations</h3>
              <div class="row my-2">
                <div class="col-md-8 " style="padding-top: 10px;">
                  <p>NAIL SPA in Ha Noi city</p>
                </div>
                <div class="col-md-4 ">
                  <a href="book_now.php"><button class=" btn-book-now rounded-5">BOOK NOW</button></a>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-md-8 ">
                  <p>NAIL SPA in Da Nang City</p>
                </div>
                <div class="col-md-4 ">
                  <a href="book_now.php"><button class=" btn-book-now rounded-5">BOOK NOW</button></a>
                </div>
              </div>
              <div class="row my-2">
                <div class="col-md-8 ">
                  <p>NAIL SPA in Ho Chi Minh City</p>
                </div>
                <div class="col-md-4 ">
                  <a href="book_now.php"><button class=" btn-book-now rounded-5 ">BOOK NOW</button></a>
                </div>
              </div>
            </div>
            <div class="col-md-7 my-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.516285517224!2d105.92669975541993!3d21.007500900000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135afe1391f2bb7%3A0xecc11a7bac874396!2sVinhomes%20Ocean%20Park!5e0!3m2!1svi!2s!4v1696694443420!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

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