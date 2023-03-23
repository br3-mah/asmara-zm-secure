<?php include("contact_process.php")?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Asmara hotel | Contact</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="img/favicon_io/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="img/favicon_io/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="img/favicon_io/favicon-16x16.png"
    />
    <link rel="manifest" href="img/favicon_io/site.webmanifest" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/gijgo.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/slicknav.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/chat.css"/>
       <script>
    setTimeout(() => {
      
      const loader = document.getElementById("loader")
         loader.style.display = "none"
         console.log("finished")
     
    }, 1000);
     
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->
    <?php include ('loader.php') ?> 
    <!-- header-start -->
   <?php include ('header.php') ?>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_2">
      <h3>Contact Us</h3>
      
       <?php

       

       
       if (!isset($_POST['email']) ) {
         //code for anyhting that goes wrong

           
      }
      
       else{
        echo "<script type='text/javascript'>alert('$result');</script>";
       }
       
      ?>
    </div>
    <!-- bradcam_area_end -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
      <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d961.7012877252408!2d28.32076032916097!3d-15.387035399331594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19408bb0a46cc9e7%3A0xbc7fd4c626788091!2sAsmara!5e0!3m2!1sen!2szm!4v1598742247676!5m2!1sen!2szm"
            width="730"
            height="450"
            frameborder="0"
            style="border: 0"
            allowfullscreen=""
            aria-hidden="false"
            tabindex="0"
          ></iframe>
        </div>

        <div class="row">
          <div class="col-12">
            <h2 class="contact-title">Get in Touch</h2>
          </div>
          <div class="col-lg-8">
              <h2 class="text-center text-white"> <?=$result; ?></h2>
                    <h2 class="text-center text-danger"> <?=$error; ?></h2>
            <form
              class="form-contact contact_form"
              action=""
              method="post"
              id="contactForm"
            >
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea
                      class="form-control w-100"
                      name="message"
                      id="message"
                      cols="30"
                      rows="9"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Message'"
                      placeholder=" Enter Message"
                     oninvalid="this.setCustomValidity('Please enter a message!')"
                     oninput="this.setCustomValidity('')"
                      required
                    ></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="number"
                      id="Name"
                      maxlength="13"
                      minlength="10"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter your number'"
                      oninvalid="this.setCustomValidity('Please enter a valid phone number!')"
                     oninput="this.setCustomValidity('')"
                      placeholder="Enter your number"
                      required
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="email"
                      id="email"
                      type="email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter email address'"
                      placeholder="Email"
                      oninvalid="this.setCustomValidity('Please enter a valid email address!')"
                     oninput="this.setCustomValidity('')"
                      required
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input
                      class="form-control"
                      name="subject"
                      id="Subject"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Enter Subject'"
                      placeholder="Enter Subject"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button
                  type="submit" name="submit"
                  class="button button-contactForm boxed-btn"
                >
                  Send
                </button>
                <h2 class="text-center text-white"> <?=$result; ?></h2>
                    <h2 class="text-center text-danger"> <?=$error; ?></h2>
              </div>
            </form>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>Lusaka, Zambia.</h3>
                <p>Plot No. 5494, Lunsemfwa Road, Kalundu, Lusaka.</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="fa fa-phone"></i></span>
              <div class="media-body">
                <h3>+260211 355 874/5</h3>
                 <h3>+2609756546690</h3>
                <!--<p>Mon to Fri 9am to 6pm</p>-->
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3>reservations@asmarahotelzm.com</h3>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer -->
    <?php include ('footer.php') ?>
    <!-- footer_end -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
      <div class="popup_box">
        <div class="popup_inner">
          <h3>Check Availability</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-6">
                <input id="datepicker" placeholder="Check in date" />
              </div>
              <div class="col-xl-6">
                <input id="datepicker2" placeholder="Check out date" />
              </div>
              <div class="col-xl-6">
                <select class="form-select wide" id="default-select" class="">
                  <option data-display="Adult">1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                </select>
              </div>
              <div class="col-xl-6">
                <select class="form-select wide" id="default-select" class="">
                  <option data-display="Children">1</option>
                  <option value="1">2</option>
                  <option value="2">3</option>
                  <option value="3">4</option>
                </select>
              </div>
              <div class="col-xl-12">
                <select class="form-select wide" id="default-select" class="">
                  <option data-display="Room type">Room type</option>
                  <option value="1">Laxaries Rooms</option>
                  <option value="2">Deluxe Room</option>
                  <option value="3">Signature Room</option>
                  <option value="4">Couple Room</option>
                </select>
              </div>
              <div class="col-xl-12">
                <button type="submit" class="boxed-btn3">
                  Check Availability
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </form>
    <!-- form itself end -->
    <?php include('./chatbot/chatdialog.php'); ?>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/all.min.js"></script>
    <!--contact js-->
    <!--<script src="js/contact.js"></script>-->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/smtp.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
      $("#datepicker").datepicker({
        iconsLibrary: "fontawesome",
        icons: {
          rightIcon: '<span class="fa fa-caret-down"></span>',
        },
      });
      $("#datepicker2").datepicker({
        iconsLibrary: "fontawesome",
        icons: {
          rightIcon: '<span class="fa fa-caret-down"></span>',
        },
      });
    </script>
   
  </body>
</html>
