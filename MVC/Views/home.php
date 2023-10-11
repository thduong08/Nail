<?php
include('../Models/database.php');
?>
<!--body-->
  <section class="nail-maincontent">
    <div class="slider">
      <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../img/ảnh_thanh_trượt/anh5.jpeg" class="d-block w-100" alt="Wild Landscape" style="object-fit: cover" />
            <div class="carousel-caption">
              <div class="mb-5">
                <h1>Nail Your </h1>
                <h1>Nail Narrative</h1>
              </div>

              <a href=""><button type="button" class="btn btn-light rounded-5">BOOK A SERVICE</button></a>
              <a href=""><button type="button" class="btn btn-light rounded-5">SHOP NEW</button></a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="../../img/ảnh_thanh_trượt/anh4.jpg" class="d-block w-100" alt="Camera" style="object-fit: cover"  />
            <div class="carousel-caption">
              <div class="mb-5">
                <h1>Nail Your </h1>
                <h1>Nail Narrative</h1>
              </div>

              <a href=""><button type="button" class="btn btn-light rounded-5">BOOK A SERVICE</button></a>
              <a href=""><button type="button" class="btn btn-light rounded-5">SHOP NEW</button></a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="../../img/ảnh_thanh_trượt/anh3.jpg" class="d-block w-100" alt="Exotic Fruits" style="object-fit: cover"  />
            <div class="carousel-caption">
              <div class="mb-5">
                <h1>Nail Your </h1>
                <h1>Nail Narrative</h1>
              </div>

              <a href=""><button type="button" class="btn btn-light rounded-5">BOOK A SERVICE</button></a>
              <a href=""><button type="button" class="btn btn-light rounded-5">SHOP NEW</button></a>
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
      <div class="container-fluid text-center py-3">
        <h1 class="pb-3">More than a Mani</h1>
        <p class="p-0 m-0">For 15 years and counting, we’ve been delivering the highest quality nail care and waxing services and</p>
        <p class="p-0 m-0">products. We’re committed to clean and better-for-you experiences that celebrate your self-expression,</p>
        <p class="p-0 m-0">empower our designers and positively change our industry - one mini moment at a time.</p>
      </div>
    </div>
    <div class="nail-product container-fluid">
      <div class="row">
        <div class="col-md-10">
          <h3 class="text-warning">Best Seller </h3>
        </div>
        <div class="col-md-2">
          <a href="" style="text-decoration:underline; color: black">Shop Best Sellers</a>
        </div>
      </div>

      <div class="row product-slide">
      <?php
       $sql = "SELECT * FROM Products where ProductID <= 10 ";
       $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $productName = $row["ProductName"];
            $price = $row["Price"];
            $imageURL = $row["ImageURL"];
            echo '<div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="' . $imageURL . '" class="card-img-top img-fluid" alt="' . $productName . '">
                        <div class="card-body">
                            <h5 class="card-title">' . $productName . '</h5>
                            <p class="card-text">$' . $price . '</p>
                            <div class="col-md-6"><del>Price: 18$</del></div>
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

    </div>
    <div class="nail-certification" style="padding: 50px 32px 104px;
                                          max-width: 1440px;
                                          margin: 0 auto;">
      <h1 class="text-center" style="padding-top: 100px; padding-bottom: 50px;">Ingredients you can count on</h1>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="item">
              <i class="bi bi-badge-8k-fill fs-2"></i>
              <div class="card-body">
                <p class="card-text">Free of the eight most toxic ingredients in nail care.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <i class="bi bi-cloud-sun-fill fs-2"></i>
              <div class="card-body">
                <p class="card-text">Cruelty-free and committed to never test on animals.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <i class="bi bi-globe fs-2"></i>
              <div class="card-body">
                <p class="card-text">For our best-selling Nourishing Cuticle Oil Rollerball.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="item">
              <i class="bi bi-flag-fill fs-2"></i>
              <div class="card-body">
                <p class="card-text">All of our products are made in the USA.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nail-story my-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <img src="../../img/image/story.webp" alt="">
          </div>
          <div class="col-md-6">
            <div style="padding-top: 50px; padding-left: 70px;">
              <h1>Empowerment <br>is Beautiful</h1>
              <p class="py-3">Founded with a vision to radically change <br> an industry by doing what is right, not <br> just what is standard.</p>
              <a href=""><button type="button" class="btn-book-now rounded-5 fs-3 mt-5">About Us</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="location py-5">
      <h1 class="text-center">Location</h1>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <h3>Our locations</h3>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">@</span>
              <input type="text" class="form-control" placeholder="Search by Region, State, City" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="row my-2">
              <div class="col-md-8 " style="padding-top: 10px;">
                <p>NAIL SPA in Ha Noi city</p>
              </div>
              <div class="col-md-4 ">
                <a href="#"><button class=" btn-book-now rounded-5">BOOK NOW</button></a>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-8 ">
                <p>NAIL SPA in Da Nang City</p>
              </div>
              <div class="col-md-4 ">
                <a href="#"><button class=" btn-book-now rounded-5">BOOK NOW</button></a>
              </div>
            </div>
            <div class="row my-2">
              <div class="col-md-8 ">
                <p>NAIL SPA in Ho Chi Minh City</p>
              </div>
              <div class="col-md-4 ">
                <a href="#"><button class=" btn-book-now rounded-5 ">BOOK NOW</button></a>
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

