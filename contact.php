<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
 ?>


<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="PotaTo Go">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Potato Go</title>

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/potatogo/css/style.css">
  <link rel="stylesheet" href="assets/potatogo-slider/style.css">
  <link rel="stylesheet" href="assets/potatogo-gallery/style.css">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
  <section class="ptg-navbar ptg-navbar--freeze ptg-navbar--absolute ptg-navbar--transparent ptg-navbar--sticky ptg-navbar--auto-collapse" id="menu-20">
      <div class="ptg-navbar__section ptg-section" id="home">
          <div class="ptg-section__container container">
              <div class="ptg-navbar__container">
                  <div class="ptg-navbar__column ptg-navbar__column--s ptg-navbar__brand">
                      <span class="ptg-navbar__brand-link ptg-brand ptg-brand--inline">
                          <span class="ptg-brand__logo">
                            <a href="#index.html">
                              <img class="ptg-navbar__brand-img ptg-brand__img" src="assets/images/Potato-logo.png" alt="Potato-Go">
                            </a>
                          </span>
                          <span class="ptg-brand__name">
                            <a class="ptg-brand__name text-white" href="#index.html">POTATO GO</a>
                          </span>
                      </span>
                  </div>

                  <div class="ptg-navbar__hamburger ptg-hamburger text-white"><span class="ptg-hamburger__line"></span></div>
                  <div class="ptg-navbar__column ptg-navbar__menu">
                      <nav class="ptg-navbar__menu-box ptg-navbar__menu-box--inline-right">
                          <div class="ptg-navbar__column">
                            <ul class="ptg-navbar__items ptg-navbar__items--right ptg-buttons ptg-buttons--freeze ptg-buttons--right btn-decorator ptg-buttons--active">
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="index.html">Home</a></li>
                                <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="menu.html">Menu</a></li>
                            <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="reviews.html">Reviews</a></li>
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="about.html">About</a></li>
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="contact.html">Contact</a></li>
                              <li class="ptg-navbar__item"><a class="ptg-buttons__link btn text-white" href="checkout.html">
                                <span class="glyphicon glyphicon-shopping-cart"></span> 0.00
                              </a></li>
                            </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </section> <!-- end of nav-->
  <section class="ptg-section ptg-section--relative ptg-section--fixed-size" id="social-buttons2-84" style="background-color: rgb(240, 240, 240);">

  </section>
  <?php
  $status = "";
  require('config.php');
  if(isset($_POST['btnSubmit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $msg = mysqli_real_escape_string($con,$_POST['message']);
    $query = "INSERT INTO Message(name, email, phone, msg) VALUES('$name', '$email', '$phone', '$msg');";

    $result = mysqli_query($con, $query);
    if($result){
      $status = '<p class="ptg-buttons__btn btn btn-lg btn-success disabled">Sent</p>';
    }
    else{
    $status = '<p class="ptg-buttons__btn btn btn-lg btn-danger disabled">Failed<[]>';
    }

    mysqli_close($con);
  }
  ?>

  <section class="ptg-section ptg-section--relative ptg-section--fixed-size" id="form1-89" style="background-color: rgb(239, 239, 239);">

      <div class="ptg-section__container ptg-section__container--std-padding container">
          <div class="row">
              <div class="col-sm-12">
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                          <div class="ptg-header ptg-header--center ptg-header--std-padding">
                              <h2 class="ptg-header__text">CONTACT FORM</h2>
                          </div>
                          <div data-form-alert="true"></div>
                          <form method="post" data-form-title="CONTACT FORM">
                              <input type="hidden" value="" data-form-email="true">
                              <div class="form-group">
                                  <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                              </div>
                              <div class="form-group">
                                  <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                              </div>
                              <div class="form-group">
                                  <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                              </div>
                              <div class="ptg-buttons ptg-buttons--right">
                              <?php echo $status; ?>
                                <button type="submit" name = "btnSubmit" class="ptg-buttons__btn btn btn-lg btn-warning">CONTACT US</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--footer-->
  <section class="ptg-section ptg-section--relative ptg-section--fixed-size" id="contacts2-90" style="background-color: rgb(60, 60, 60);">

      <div class="ptg-section__container container">
          <div class="ptg-contacts ptg-contacts--wysiwyg row">
              <div class="col-sm-6">
                  <figure class="ptg-figure ptg-figure--wysiwyg ptg-figure--full-width ptg-figure--no-bg">
                      <div class="ptg-figure__map ptg-figure__map--short ptg-google-map">
                          <p class="ptg-google-map__marker" data-coordinates="14.5984114,121.01003560000004"></p>
                      </div>
                  </figure>
              </div>
              <div class="col-sm-6">
                  <div class="row">
                      <div class="col-sm-5 col-sm-offset-1">
                          <p class="ptg-contacts__text"><strong>ADDRESS</strong><br>
  1964 A Jose Abad Santos St.<br>
  Sta Mesa, Manila<br><br>
  <strong>CONTACTS</strong><br>
  Email: micoinfante1997@gmail.com<br>
  Phone: 09068692524<br>
  </p>
                      </div>
                      <div class="col-sm-6">
                        <p class="ptg-contacts__text"><strong>Did not find what you're looking for?</strong></p>
                        <ul class="ptg-contacts__list">
                          <li>
                            <a href="#" class="text-gray">Zomato</a>

                          </li>
                            <li><a href="#" class="text-gray">TripAdvisor</a>
                              <a class="ptg-contacts__link text-gray" href="#">Quora</a>
                            </li><li><a href="#" class="text-gray">Reddit Food</a>
                            </li><li><a href="#" class="text-gray">Dishtip.com</a></li>
                            <li>
                              <br>
                            </li>
                          </ul>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <footer class="ptg-section ptg-section--relative ptg-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">

      <div class="ptg-section__container container">
          <div class="ptg-footer ptg-footer--wysiwyg row">
              <div class="col-sm-12">
                  <p class="ptg-footer__copyright"></p><p>Copyright (c) 2016 <a href="#" class="text-gray">Potato Go</a></p>
              </div>
          </div>
      </div>
  </footer> <!-- end of footer -->



  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/potatogo/js/script.js"></script>
  <script src="assets/potatogo-gallery/script.js"></script>

</body>
</html>
