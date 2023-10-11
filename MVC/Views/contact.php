<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../MVC/views/css/contact.css">
    <!--boosstrap 5 icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
     <title>Document</title>
     <style type="text/css">
        .header{
            border-radius: 20px 20px 0px 0px;
            padding: 10px 0px;
            background: #dca8a8;
            color: #fff;
            width: 100%;
            display: flex;
            align-content: center;
            justify-content: center;
        }
        .btn{
            background-color: #dca8a8;
        }
     </style>
</head>

<body>
    <!-- header -->
    <div class="header">
    <nav class="navbar navbar-expand-lg " style="background-color: #dca8a8;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="text-warning h1">Mini</span>Luxe</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BOOK NOW</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NAIL ART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PURE POLISH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PURE POLISH</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MORE
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Gift Card</a></li>
                <li><a class="dropdown-item" href="#">Policies</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Our Difference</a></li>
              </ul>
            </li>
          </ul>
          <div>
            <ul class="nav">
              <li class="nav-item">
                  <a class="nav-link " href="#services">About Us</a>
                </li>
              <li class="nav-item">
                <a href="" class="nav-link"
                  ><i class="bi bi-person-circle"></i
                ></a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"><i class="bi bi-search"></i></a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link"><i class="bi bi-bag"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    </div>
    <br>

    <!-- body -->
     <div class="container1">
        <div class="row">
            <div class="header-contact" style="font-family: Vanitas-Extrabold;">
                <h1>CONTACT</h1>
                <p>Thank you for your interest in Nanomart. We want to hear from you, if you have questions, comments or answers. Please contact us using the following information.</p>
            </div>
        </div>
    </div>
    <BR></BR>

    <div class ="container d-flex">
        <div class="row2">
            <div class="col-md-7">
                <form class="main">
                    <h2 class="text-center">Your Feedback?</h2>
                    <p class="text-center">We're here to help. Send us a note below and we'll get back to you.</p>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
            <div class="row3 ms-5">
                <div>
                    <h1 style="font-family: Vanitas-Extrabold;" class="text-center m-4">CONTACT US</h1>
                </div>
                <div>
                <h3 style="font-family: MierB-Demi;">STUDIO INQUIRIES</h3>
                <p>Can’t find an answer to a question on our <a href="FAQ.php">FAQ page</a>? We’ve got you covered! Please contact: <a href="#">info@miniluxe.com.</a>.</p>
                </div>

                <div>
                <h3 style="font-family: MierB-Demi;">EVENTS</h3>
                <p>We love a party! If you would like to host a work event, bridal party, birthday party or any other celebration, please contact us at <a href="#">events@miniluxe.com</a>. We can host the self-care event of your dreams in-studio or we can come to you!</p>
                </div>
            </div>
    </div>
    <!-- footer -->
    <div class="footer">
    <footer class="py-3 my-4 " style="background-color: #dca8a8;">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">BOOK NOW</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">SERVICES</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">NAIL ART</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">NAIL CARE</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted">ABOUT</a>
        </li>
      </ul>
      <p class="text-center text-muted">
        58 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội
      </p>
      <p class="text-center text-muted">© 2023 Miniluxe, Inc</p>
    </footer>
    </div>

</body>

</html>