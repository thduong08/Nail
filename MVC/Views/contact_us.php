<?php
include('../Models/database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/contact_us.css">
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
  </div>

  <section class="nail-header">
    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-md-5 d-none d-md-block">
          <div class="row">
            <div class="col-md-4 "><a href="book_now.php"><button type="button" class="text-white btn-book-now">BOOK NOW</button></a></div>
            <div class="col-md-8 pt-1 p-0"><a href="service.php" style="text-decoration: none; color: black"> SERVICE</a></div>
          </div>
        </div>
        <div class="col-md-2 pt-1 fs-2 text-center">
          <a href="home.php" style="text-decoration: none; color: black;font-size: 40px"><span>NAIL SPA</span></a>
        </div>
        <div class="col-md-5 d-none d-md-block">
          <div class="row">
            <div class="col-md-6 text-end" ><a href="about_us.php" style="text-decoration: none; color: black">About Us</a></div>
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

        <!-- body -->
    <div class ="container d-flex" style="padding: 100px">
            
        <div class="row2">
            <div class="col-md-7">
                <form class="main">
                    <h2 class="text-center">Your Feedback?</h2>
                    <p class="text-center">We're here to help. Send us a note below and we'll get back to you.</p>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First name *</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last name *</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="last name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn-book-now" style="margin-left: 190px">Submit</button>
                </form>
            </div>
        </div>

        <div class="row ms-5">
                <div>
                    <h1 style="font-family: Vanitas-Extrabold;" class="text-center">CONTACT US</h1>
                </div>
                <div class="d-flex">
                <!-- <div class="me-4"><h4>Nail Spa</h4></div>
                <div>
                <select class="form-select form-control" aria-label="Default select example">
                    <option selected>Monday</option>
                    <option value="1">Tuesday</option>
                    <option value="2">Wednesday</option>
                    <option value="3">Thursday</option>
                    <option value="4">Friday</option>
                    <option value="5">Saturday</option>
                    <option value="6">Sunday</option>
                </select>
                </div>
                </div> -->
                <div>
                    <div>
                        <h5>SHOP AND SHIPPING INQUIRIES</h5>
                        <p>For shipping, product and other order inquiries, please contact: <a href="#">customerservice@miniluxe.com</a></p>
                    </div>
                    <div>
                        <h5>WHOLESALE</h5>
                        <p>For inquiries regarding wholesale purchases or opening a wholesale account to retail our products, please contact: <a href="#">wholesale@miniluxe.com</a></p>
                     </div>
                <br><br> <br><br><br>
                <!-- <div>
                    <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">19 Lê Thanh nghị<br>
                    SDT: 01325323561<br>
                    Email: contact@nailspa.com <br>
                    </p>
                </div> -->
                </div>  
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
          <div class="mb-3" style="display:flex">
            <input type="text" class="form-control" placeholder="Your email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button style="margin-left: 10px;" class=" btn-outline-secondary btn-light caption" type="button" id="button-addon2">Subscribe</button>
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
  <script type="text/javascript" src="./js/home.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>