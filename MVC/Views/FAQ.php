<?php
include('../Models/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ - Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/FAQ.css">
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
            <div class="col-md-8 pt-1 p-0 lh-lg"><a href="service.php" style="text-decoration: none; color: black"> SERVICE</a></div>
          </div>
        </div>
        <div class="col-md-2 pt-1 fs-2 text-center">
          <a href="home.php" style="text-decoration: none; color: black; font-size:40px"><span>NAIL SPA</span></a>
        </div>
        <div class="col-md-5 d-none d-md-block">
          <div class="row">
            <div class="col-md-6 text-end lh-lg" ><a href="about_us.php" style="text-decoration: none; color: black">About Us</a></div>
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
<!--body-->
    <div class="container" style="padding-top: 50px; padding-bottom: 100px ">
        <div class="row">
            <div class="faq-wrapper">
                <div class="header">
                <h1>FREQUENTLY ASKED QUESTIONS</h1>
                </div>
                <hr>
                <div class="accordion" id="accordionExample">
                    <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            WHY NAIL ART? OR WHY SHOULD I DO NAIL ART?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            We talk about this a little bit in our bio, and although the reason is different for everyone, I think that the overarching sentiment is that it brings us joy (insert Marie Kondo here). Art is very emotional and I don’t think nail art is an exception. Every time I look down at my nails I feel a sense of pride, I’m proud to be making self-care a habit and proud of the beautiful work the artist was able to create. In a way it is also similar to why people get tattoos, they enjoy the art form and they want to use it to express themselves. Nail art is not permanent, so you can change it to reflect your state of mind month by month. The range of subjects the people have turned into nail art is outrageous. I’m sure after you try it for the first time you’ll be hooked.
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            WHAT IS NAIL ART PAINT/POWDER?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            Nail art is most commonly done in two mediums, acrylic or gel. 

                            Acrylic is where you see techs dipping a brush into liquid and then into a powder to form a dough like clump. Acrylic comes in many different colors and is most commonly used to make extensions because it dries in a couple of seconds after the two substances are combined. 
                            Hard gel can also be used to make extensions, and it is very similar to acrylic both chemically and physically. However, hard gel is a liquid, and stays liquid until it is cured under UV light. 

                            Why technicians chose one or the other is usually personal preference. Why you, as the client, might have a preference is usually dependent on the removal process. Hard gel has a tighter chemical structure and can only be filed off, while acrylics can be soaked off with acetone.

                            You might be saying, I’ve had gel and it’s been soaked off! 

                            This is soft gel, which is applied the same way as hard gel, but is engineered to have a weaker molecular structure that is penetrable by acetone. If you don’t want extensions, your tech will most likely use soft gel. They will then top coat the soft gel with hard gel, which is why during removal they file each nail a little first before they soak off. If your tech does not put a hard top coat over your soft gel, your nail might feel weak or the design will deteriorate, so keep a look out for this important last step. 

                            Now you might be thinking, but what is dip powder then? As you might have suspected (if you have had a dip manicure before and know the process), dip powder is just a different way of applying acrylic. Dip is usually used for applying acrylic when you don’t need extensions. You can do nail art with dip powder, but to be honest it looks like a hassle compared to just doing it the regular way.  Also there have been some health and safety concerns with dip, as some salons will dip directly into the jar of powder. This means that they use the same jar for everyone and your finger could come into contact with germs that were on another client’s hands. If you want to try dip make sure they are pouring it on or using a separate bowl.                             </div>
                        </div>
                    </div>
                    <hr>

                    <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            HOW LONG WILL NAIL ART LAST?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            NThe amount of time that a set will last is dependent on your type of nail, what products were used, and how it was applied. If applied correctly (on certain nail types) hard gels and acrylics can be basically immortal. We’ve seen evidence of a design lasting five weeks without damage. Soft gel designs that are topped with hard gel last, on average, three weeks before chipping and lifting occur. I’ve heard some people say that they could grow out their gel manicure to oblivion, attributing this to the expert application. Even at the best salon I’ve been to, my gel polish has lifted, so I think this is much more dependent on your nail type. Finally, manicures done with regular lacquer last 3.5 seconds before being totally not worth it. 
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            HOW MUCH DOES NAIL ART COST?
                            </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            The short answer is $65 and up. The long answer is this it depends on where you go and what you ask for. If you know how much you want to spend you can just tell them to keep it at that price. If you know what design you want, show it to them before hand and ask them how much it will cost, then negotiate from there. If you are in a rich area *cough Manhattan* it’ll cost more because… economics. You don’t have to break the bank to get nail art. Just be clear and specific before you start your session.
                            </div>
                        </div>
                      </div>
                      <hr>

                      <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            HOW LONG DOES IT TAKE TO GET NAIL ART?
                            </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            I would block out at least two hours of your time for a nail art manicure. It could take less, my shortest appointment was an hour and a half, but better to be safe than sorry. If you know you are getting something complicated, like a raised shape or pattern, be prepared to sit for three plus hours.                            </div>
                        </div>
                      </div>
                      <hr>

                      <div class="">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            CAN NAIL ART BE DONE WITH CND SHELLAC?                            </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Shellac is the brand CND’s line of UV soft gel, so yes, it can totally be used for nail art! However, to my knowledge, Shellac on comes in bottles and not in pots. That may be why you don’t see it salons that use potted colors. Gels that come in pots or little jars give the techs more freedom and control. 
                          </div>
                        </div>
                      </div>
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
  <!-- <script type="text/javascript" src="./js/home.js"></script> -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>