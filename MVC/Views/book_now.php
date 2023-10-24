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
  <title>Book - Nail Spa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/book_now.css">
  <link rel="icon" href="../../img/Logo_icon2/1.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link href='https://fullcalendar.io/releases/fullcalendar/5.7.0/main.css' rel='stylesheet' />
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
                  <p class="m-0 p-0 fs-5"><i class="bi bi-bag"></i></p>(<?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>)
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
    <hr>

    <!--body-->
    <div style="background: inherit;">
      <div class="container webstore" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
        <router-outlet></router-outlet>
        <div class="row soft" style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
          <div class="push-double--bottom">
            <div class="hidden-md-up push-double--bottom">
              <div>
                <button id="hide-more-info" type="button" class="more-info">
                  Hide More Info
                </button>
                <button id="show-more-info" type="button" class="more-info">
                  Show More Info
                </button>
                <br>
                <div id="sidebar">
                  <div class="location-info">
                    <ul class="clearfix">
                      <li id="location-address">
                        <h3>
                          <b>NAILSPA ROYAL</b>
                        </h3>
                        <div class="wpsl-locations-details">
                          <div class="wpsl-location-address">
                            <p>
                              <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                              19 Lê Thanh Nghị
                              <br>
                              0869724883
                              <br>
                              nailspa@gmail.com
                            </p>
                          </div>
                        </div>
                      </li>
                      <li id="location-hours">
                        <h3>
                          <b>Hours</b>
                        </h3>
                        <table role="presentation" class="wpsl-opening-hours">
                          <tbody>
                            <tr>
                              <td width="50%">Monday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Tuesday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Wednesday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Thursday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Friday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Saturday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                            <tr>
                              <td>Sunday</td>
                              <td>9AM - 7PM</td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <div class="location-info">
                        <ul class="clearfix">
                          <li id="location-address">
                            <h3>
                              <b>YOU NEED TO KNOWS:</b>
                            </h3>
                            - Changes and reschedules must be made at least 20 minutes prior to your scheduled visit.
                          </li>
                        </ul>
                      </div>
                      - Late cancellations, late reschedules, and no-shows will be subject to a $25 fee.
                    </ul>
                  </div>
                  - We do not offer or remove dip powder, acrylics, or UV hard gels.
                </div>
              </div>
              <div>&nbsp;</div>
              <!---->
              <!---->
              <div>
                <div class="col-12 bg-white border--gray push-double--bottom">
                  <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 soft" style="display: flex;
                                  justify-content: center;
                                  align-items: center;">
                      <span id="Groupbooking" class="">
                        I would like to book an appointment for
                      </span>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-12 soft flex-center">
                      <select tabindex="0" autocomplete="off" aria-labelledby="Groupbooking" class="form-control mb-0 book_border">
                        <option value="0">just me</option>
                        <option value="1">2-4 guests</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!---->
              <!---->
              <div>
                <span class="h5">
                  <b>
                    <div role="heading" aria-level="5" for="serviceSearchtext" id="serviceSelectionid" class="push-double--bottom">
                      SELECT A SERVICE
                    </div>
                  </b>
                </span>
                <div>
                  <div id="scrollToCategories" class="categories">
                    <div role="tablist" aria-orientation="horizontal" class="row height--100 hard--right">
                      <div class="col-6 mani">
                        <a href="" class="border-top--gray border-sides--gray btn-block height--100 category-tab flex-align-justify--center soft tabactive" id="category_mani" aria-selected="true" aria-controls="selected_category_mani">
                          <span>MANICURES</span>
                        </a>
                      </div>
                      <div class="col-6 pedi">
                        <a href="" class="border-top--gray border-sides--gray btn-block height--100 category-tab flex-align-justify--center soft border-bottom--gray tabactive" id="category_pedi" aria-selected="false">
                          <span>PEDICURES</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div role="group" class="services-list service-mani" id="category_mani" aria-labelledby="category" aria-label="Mani">
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Gel Mani">Gel Mani</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$55.00</span>
                              <br>
                              <span>45min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Mani">Mani</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$25.00</span>
                              <br>
                              <span>30min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Mani Polish Change">Mani Polish Change</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$15.00</span>
                              <br>
                              <span>15min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Dip Powder Mani">Dip Powder Mani</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$60.00</span>
                              <br>
                              <span>60min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                  </div>

                  <div role="group" class="services-list service-pedi" id="category_pedi" aria-labelledby="category" aria-label="Mani">
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Gel Pedi">Gel Pedi</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$75.00</span>
                              <br>
                              <span>45min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Pedi">Pedi</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$40.00</span>
                              <br>
                              <span>30min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                    <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                      <div class="col-7 hard--right">
                        <a class="height--100 btn-block soft--top">
                          <span class="h5">
                            <b id="largeScreenServiceCheckbox0_Pedi Polish Change">Pedi Polish Change</b>
                          </span>
                          <div>
                            <p class="break-word"></p>
                          </div>
                        </a>
                      </div>

                      <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                        <a class="height--100 btn-block soft--top">
                          <span class="zen-txt-line-through">
                            <del>
                              <span class="zen-txt-line-through">
                                Discounted Price
                              </span>
                            </del>
                          </span>
                        </a>
                      </div>

                      <div class="col-3 hard--left">
                        <div class="row flex-column-reverse flex-md-row">
                          <div class="col-md-7">
                            <a class="height--100 btn-block soft--top text-right">
                              <span>$20.00</span>
                              <br>
                              <span>15min</span>
                            </a>
                          </div>
                          <div class="col-md-5">
                            <a class="height--100 btn-block soft--top soft--right">
                              <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                              <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </label>
                    <!--  -->
                  </div>
                  <div>&nbsp;</div>
                  <span class="h5">
                    <b>
                      <div role="heading" aria-level="5" for="serviceSearchtext" id="serviceSelectionid" class="push-double--bottom">
                        ADDITIONAL SERVICES
                      </div>
                    </b>
                  </span>
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Gel Extensions">Gel Extensions</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$40.00</span>
                            <br>
                            <span>(+30min)</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Gel Estensions Removal">Gel Estensions Removal</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$20.00</span>
                            <br>
                            <span>30min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Basic Designa">Basic Design(All Nails)</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$24.00</span>
                            <br>
                            <span>15min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Step up Design">Step up Design(All Nails)</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$40.00</span>
                            <br>
                            <span>30min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Foil Designa">Foil Design(All Nails)</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$40.00</span>
                            <br>
                            <span>15min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Foil Design">Foil Design(Per Nails)</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$6.00</span>
                            <br>
                            <span>15min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Hand Massage">Hand Massage</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$20.00</span>
                            <br>
                            <span>10min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Callus Removal">Callus Removal</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$12.00</span>
                            <br>
                            <span>5min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Get Removal">Get Removal</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$10.00</span>
                            <br>
                            <span>15min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Basic Design">Basic Design(All Nails)</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$24.00</span>
                            <br>
                            <span>15min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                            <i class="icon-chec pull-right" id="servicesCheckbox_0" style></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->
                  <label for="largeScreenServiceCheckbox0" class="row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray">
                    <div class="col-7 hard--right">
                      <a class="height--100 btn-block soft--top">
                        <span class="h5">
                          <b id="largeScreenServiceCheckbox0_Pedi Massage">Pedi Massage</b>
                        </span>
                        <div>
                          <p class="break-word"></p>
                        </div>
                      </a>
                    </div>

                    <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                      <a class="height--100 btn-block soft--top">
                        <span class="zen-txt-line-through">
                          <del>
                            <span class="zen-txt-line-through">
                              Discounted Price
                            </span>
                          </del>
                        </span>
                      </a>
                    </div>

                    <div class="col-3 hard--left">
                      <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-7">
                          <a class="height--100 btn-block soft--top text-right">
                            <span>$12.00</span>
                            <br>
                            <span>10min</span>
                          </a>
                        </div>
                        <div class="col-md-5">
                          <a class="height--100 btn-block soft--top soft--right">
                            <input type="radio" name="selectedService" autocomplete="off" id="largeScreenServiceCheckbox0" aria-checked="false">
                          </a>
                        </div>
                      </div>
                    </div>
                  </label>
                  <!--  -->

                  <div>&nbsp;</div>

                  <div>
                    <span class="h5">
                      <b>
                        <div role="heading" aria-level="5" for="serviceSearchtext" id="serviceSelectionid" class="push-double--bottom">
                          SELECT A NAIL TECHNICIAN
                        </div>
                      </b>
                    </span>
                    <!--  -->
                    <div id="therapistList0" class="active">
                      <div class="container">
                        <div role="group" class="row" aria-labelledby="service0">
                          <div class="col-xs-10 col-sm-10 soft--bottom soft--top zen-selection--detail d-flex flex-column col-md-12">
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_anytech" style="font-weight: bold;word-break: break-word;">
                                    Any Nail Technician
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_kirit" style="font-weight: bold;word-break: break-word;">
                                    Kirit Elena
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_sindy" style="font-weight: bold;word-break: break-word;">
                                    Sindy Mark
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_jessi" style="font-weight: bold;word-break: break-word;">
                                    Jessi Lena
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_bell" style="font-weight: bold;word-break: break-word;">
                                    Bell Mary
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_asa" style="font-weight: bold;word-break: break-word;">
                                    Korinn Asa
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                            <label class="d-flex align-items-center flex--space-between row height--100 mr-0 ml-0 mb-0 service-detail border-bottom--gray border-sides--gray" for="nailtechnician">
                              <div class="hard--right pl-0">
                                <span class="pull-left height--100 flex--align-center ml-0">
                                  <span class="multiple-therapist-name" id="nailtechnician_jangssi" style="font-weight: bold;word-break: break-word;">
                                    Jangsii
                                  </span>
                                </span>
                              </div>
                              <div class="col-2 hard--left hard--right hard--left" style="display: inline-block;">
                                <a class="height--100 btn-block soft--top">
                                  <span class="zen-txt-line-through">
                                    <del>
                                      <span class="zen-txt-line-through">
                                        Discounted
                                      </span>
                                    </del>
                                  </span>
                                </a>
                              </div>
                              <div class="hard--left">
                                <div class="d-flex align-items-center">
                                  <div class="d-flex">
                                    <a class="d-flex align-items-center"></a>
                                  </div>
                                  <div class="p-0 flex-column-reverse">
                                    <a class="height--100 btn-block">
                                      <input type="radio" name="selectedService" autocomplete="off" id="" aria-checked="false">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </label>
                            <!--  -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->
                <span class="h5">
                  <b>
                    <div role="heading" aria-level="5" for="serviceSearchtext" id="serviceSelectionid" class="push-double--bottom">
                      Booking Date
                    </div>
                  </b>
                </span>
                <div id="datePicker" class="datePicker" style="padding-bottom:15px;">
                  <form method="post">
                    <table style="width: 100%;
                                  border-collapse: collapse;
                                  text-decoration: none;
                                  color: inherit;
                                  border: 1px solid black;">
                      <tr style="border: 1px solid black;">
                        <th style="border: 1px solid black;padding: 10px;
                                  text-align: center; background-color: #dca8a8;
        color: white;">Mon</th>
                        <th style="border: 1px solid black;padding: 10px;
                                  text-align: center; background-color: #dca8a8;
        color: white;">Tue</th>
                        <th style="border: 1px solid black;padding: 10px;
                                    text-align: center; background-color: #dca8a8;
        color: white;">Wed</th>
                        <th style="border: 1px solid black;padding: 10px;
                                    text-align: center; background-color: #dca8a8;
        color: white;">Thu</th>
                        <th style="border: 1px solid black;padding: 10px;
                                    text-align: center; background-color: #dca8a8;
        color: white;">Fri</th>
                        <th style="border: 1px solid black;padding: 10px;
                                    text-align: center; background-color: #dca8a8;
        color: white;">Sat</th>
                        <th style="border: 1px solid black;padding: 10px;
                                    text-align: center; background-color: #dca8a8;
        color: white;">Sun</th>
                      </tr>
                      <?php
                      $currentYear = date("Y");
                      $currentMonth = date("n");
                      $defaultYear = 2023;
                      $defaultDay = date("d");
                      $selectedYear = isset($_POST['year']) ? $_POST['year'] : $defaultYear;
                      $selectedMonth = isset($_POST['month']) ? $_POST['month'] : $currentMonth;
                      $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $selectedMonth, $selectedYear);
                      $firstDay = date("N", strtotime("$selectedYear-$selectedMonth-1"));

                      $dayCounter = 1;
                      echo "<tr>";
                      for ($i = 1; $i < $firstDay; $i++) {
                        echo "<td></td>";
                      }
                      for ($day = 1; $day <= $daysInMonth; $day++) {
                        $isSelected = ($day == $defaultDay && $selectedYear == $currentYear && $selectedMonth == $currentMonth) ? 'selected' : '';
                        // Thay đổi thành thẻ <a> hoặc <button> và sử dụng JavaScript để xử lý sự kiện khi nhấn vào ngày.
                        echo "<td style=\"cursor: pointer;text-decoration: none;
                                          color: inherit;padding: 10px;
                                          text-align: center;border: 1px solid black;\">
                                          <a href='javascript:void(0);' onclick='selectDay($day);' style=\"text-decoration: none;
                                          color: inherit;\">$day</a></td>";
                        if (($day + $firstDay - 1) % 7 == 0 || $day == $daysInMonth) {
                          echo "</tr>";
                          if ($dayCounter < $daysInMonth) {
                            echo "<tr>";
                          }
                        }

                        $dayCounter++;
                      }
                      ?>
                    </table>
                    <div>&nbsp;</div>
                    <label for="yearSelect">Year:</label>
                    <select name="year" id="yearSelect">
                      <?php
                      $currentYear = date("Y");
                      $defaultYear = 2023;
                      for ($year = $currentYear - 5; $year <= $currentYear + 5; $year++) {
                        $selected = ($year == $selectedYear) ? 'selected' : '';
                        echo "<option value=\"$year\" $selected>$year</option>";
                      }
                      ?>
                    </select>

                    <label for="monthSelect">Month:</label>
                    <select name="month" id="monthSelect" onchange="this.form.submit()">
                      <?php
                      $selectedMonth = isset($_POST['month']) ? $_POST['month'] : $currentMonth;
                      $months = array(
                        'January', 'February', 'March', 'April', 'May', 'June',
                        'July', 'August', 'September', 'October', 'November', 'December'
                      );

                      ?>
                    </select>
                    <input type="submit" value="Select" style="display: none;">
                  </form>
                </div>
                <div class="col-md-6 hard--left hard--right timeslot-div">
                  <div class="date-display soft--top">
                    <p id="scrollToTimeSlots" tabindex="-1" role="heading" aria-level="5" class="adaptable_h5">
                      <span style="display: none;">Choose a time below for </span>
                      Choose a time
                    </p>
                  </div>
                  <div class="timeslot-list">
                    <fieldset role="group" aria-labelledby="time_slot_selection" style="position: relative;">
                      <legend id="time_slot_selection" style="display: none;">Choose a time</legend>
                      <label for="timeslot1" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">9:00AM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot1" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot2" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">10:00AM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot2" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot3" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">11:00AM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot3" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot4" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">12:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot4" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot5" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">1:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot5" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot6" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">2:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot6" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot7" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">3:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot7" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot8" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">4:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot8" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot9" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">5:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot9" aria-checked="false">
                          </span>
                        </span>
                      </label>
                      <label for="timeslot10" class="timeslot-detail btn-block soft--left soft--right mb-0 mt-0">
                        <span class="d-flex flex-row justify-content-start">
                          <span class="col-6 height--100 soft--top pl-0">6:00PM</span>
                          <span class="col-6 height--100 soft--top">
                            <input type="radio" name="timeslot" autocomplete="off" id="timeslot10" aria-checked="false">
                          </span>
                        </span>
                      </label>
                    </fieldset>
                  </div>
                </div>
                <div>&nbsp;</div>
                <button type="submit" name="submit_book" class="btn" style="margin-left: 400px;background-color: #dca8a8; color: #fff">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--body-->

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="./js/book_now.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src='https://fullcalendar.io/releases/fullcalendar/5.7.0/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>