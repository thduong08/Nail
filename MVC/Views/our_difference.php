<?php
include('../Models/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Difference</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/our_difference.css">
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
        <div class="col-md-5 d-none d-md-block">
          <div class="row">
            <div class="col-md-4 "><a href="book_now.php"><button type="button" class="btn btn-book-now rounded-5 lh-lg">BOOK NOW</button></a></div>
            <div class="col-md-8 pt-1 p-0 lh-lg"><a href="" style="text-decoration: none; color: black"> SERVICE</a></div>
          </div>
        </div>
        <div class="col-md-2 pt-1 fs-2 text-center">
          <a href="home.php" style="text-decoration: none; color: black"><span>NAIL SPA</span></a>
        </div>
        <div class="col-md-5 d-none d-md-block">
          <div class="row">
            <div class="col-md-6 text-end lh-lg" ><a href="" style="text-decoration: none; color: black">About Us</a></div>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <!-- <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="#">Gift Card</a>
            </li> -->
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="policies.php">Policies</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="our_difference.php">Our difference</a>
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
<body>
<div class="main" style="padding:100px">
        <div class="container d-flex">
            <div class="level text-render ">
                <h3>RUSSIAN manicure:</h3>
            </div>
            <div class="content p-2">
                <p>- We use E-file bits to push back and exfoliate the dead skin which gives us a more clean and polished look!  
This technique avoids cutting the nail too aggressively and allows the nail technician to be more in control,
 compared to when using nippers. This leaves your nails perfectly trimmed and smooth around the edges,
  resulting in a very clean finished look.</p>
        
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/our/nail1.jpg.jpg" alt="">
            </div>
        </div>  

       
        <div class="container d-flex">
            <div class="level text-render ">
                <h3>No acetone:</h3>
            </div>
            <div class="content p-1 ">
                <p>- Soaking off in acetone dehydrates nails and weakens them over a time.
                     Not to mention the harmful exposure of toxins in acetone. 
                    We safely remove old gel with e-file. </p>
            </div>
        </div>

        <div class="container d-flex">
            <div class="level text-render">
                <h3>Dry pedicure:</h3>
            </div>
            <div class="content p-3">
                <p>- Dry pedicure has been practiced in Europe for a long time. It is more hygienic,
                     healthier and longer lasting alternative to soaking in water.
                    A dry pedicure really gets to work on super dry skin and calluses,
                    which are more visible to technician than when the skin is saturated. 
                     A waterless approach will prolong polish power because soaking in water expands the nails,
                      meaning that once they’ve shrunk back to size, cracks might occur.
                    We use medical grade equipment for this service.</p>
            </div>

              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/our/mc.jpg" alt="">
    </div>
</div>

<div class="container d-flex">
    <div class="level text-render">
        <h3>Safe and non toxic:</h3>
    </div>
    <div class="content p-3">
                <p>- We only use professional, European made products which are certified to be at least 7 free:

                no Formaldehyde 
                no Toluene
                no DBP
                no Formaldehyde resin
                no Camphor
                no Xylene
                no Ethyl tosylamide

                *85% of our products are 9 Free</p>
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
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button style="margin-left: 10px;" class="btn btn-outline-secondary btn-light rounded-5" type="button" id="button-addon2">Subscribe</button>
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
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">SERVICES</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">GIFT CARDS</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul style="list-style-type: none;">
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">ABOUT US</a></li>
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