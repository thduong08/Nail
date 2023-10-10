<?php
include('../Models/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nail Art</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/library.css">
  <link rel="icon" href="../../img/Logo_icon2/1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
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
            <div class="col-md-4 "><a href=""><button type="button" class="btn btn-book-now rounded-5 lh-lg">BOOK NOW</button></a></div>
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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
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
              <a class="nav-link" aria-current="page" href="#">Policies</a>
            </li>
            <li class="nav-item px-2">
              <a class="nav-link" aria-current="page" href="#">Our diference</a>
            </li>

            <li class="nav-item dropdown px-2">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                More
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Location</a></li>
                <li><a class="dropdown-item" href="#">Contact us</a></li>
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
    <div class="main">
        <div class="container d-flex">
            <div class="level text-render ">
                <h3>Light Nail Art</h3>
            </div>
            <div class="content p-2">
                <p>Light nail art is a subtle and delicate nail design style, often favored for its elegance and simplicity. 
                  The designs in light nail art typically use soft, muted colors and petite, refined patterns, creating a minimalist and charming look for the nails. 
                  Common patterns include flowers, leaves, stripes, polka dots, or various shapes executed with gentle and delicate painting techniques.</p>
            </div>
        </div>

        <div class="content">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail10.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail11.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail12.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail13.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail14.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail15.jpg" alt="">
              </div>
            </div>
        </div>

        <div class="container d-flex">
            <div class="level text-render ">
                <h3>Medium Nail Art</h3>
            </div>
            <div class="content p-2 ms-4">
                <p>Medium nail art refers to a style of nail design that strikes a balance between subtlety and vibrancy. 
                  It encompasses designs that are more intricate and elaborate compared to light nail art, yet not overly flashy or extravagant.
                  Medium nail art often features a mix of colors, patterns, and textures, providing a moderate level of complexity and creativity. 
                  The designs may include detailed geometric shapes, ombre effects, glitter accents, or themed motifs. </p>
            </div>
        </div>

        <div class="content">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail16.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail17.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail18.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail19.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail20.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail21.jpg" alt="">
              </div>
            </div>
        </div>

        <div class="container d-flex">
            <div class="level text-render">
                <h3>Full Nail Art</h3>
            </div>
            <div class="content p-3">
                <p>Full nail art involves intricate and elaborate designs that cover the entire nail surface, showcasing a wide range of creativity and complexity.
                   The designs can vary from detailed patterns, gradients, abstract art, themed motifs, or even miniature artworks, providing a bold and eye-catching look. </p>
            </div>
        </div>

        <div class="content">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail22.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail23.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail24.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail25.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail26.jpg" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-4 image">
                  <img src="../../img/nail_art/nail27.jpg" alt="">
              </div>
            </div>
        </div>

    </div>
</div>

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
                <li class="my-2" ><a href="" style="text-decoration: none; color: #fff">SHOP</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">LOCATIONS</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">SERVICES</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">GIFT CARDS</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul style="list-style-type: none;">
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">ABOUT US</a></li>
                <li class="my-2"><a href="" style="text-decoration: none; color: #fff">CONTACT US</a></li>
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
  <script type="text/javascript" src="./js/home.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>