<?php
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Asmara Hotel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!--<link rel="stylesheet" href="css/bootstrap.min.css" />-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="css/toastr.css"/> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha512-k2WPPrSgRFI6cTaHHhJdc8kAXaRM4JBFEDo1pPGGlYiOyv4vnA0Pp0G5XMYYxgAPmtmv/IIaQA6n5fLAyJaFMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    

    <script>
        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function finish(){
            setTimeout(() => {
        
                const loader = document.getElementById("loader")
                loader.style.display = "none"
                console.log("finished")
            }, 2500);
        }
    </script>
 
   
    
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  </head>

  <body onload="window.loaded = true; finish()">
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

    <!-- slider_area_start -->
    <div class="slider_area">
      <div class="slider_active owl-carousel">
        <div
          class="single_slider d-flex align-items-center justify-content-center slider_bg_1"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-12">
                <div class="slider_text text-center">
                  <h3>Asmara Hotel</h3>
                  <p>Welcoming everyone from different cultures!</p>
                </div>
              </div>
             <!-- <div class="book_btn mt-5">
                <a class="text-white popup-with-form" href="#test-form"
                  >Book A Room</a
                >
              </div>-->
            </div>
          </div>
        </div>
        <div
          class="single_slider d-flex align-items-center justify-content-center slider_bg_2"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-12">
                <div class="slider_text text-center">
                  <h3>Welcome to Asmara</h3>
                  <p>Welcoming everyone from different cultures!</p>
                </div>
              </div>
              <div class="book_btn mt-5">
                <a class="text-white popup-with-form" href="#test-form"
                  >Book A Room</a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="single_slider d-flex align-items-center justify-content-center slider_bg_1"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-12">
                <div class="slider_text text-center">
                  <h3>Asmara Hotel</h3>
                  <p>Welcoming everyone from different cultures.</p>
                </div>
              </div>
              <div class="book_btn mt-5">
                <a class="text-white popup-with-form" href="#test-form"
                  >Book A Room</a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="single_slider d-flex align-items-center justify-content-center slider_bg_2"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-xl-12">
                <div class="slider_text text-center">
                  <h3>Life is Beautiful</h3>
                  <p>Unlock to enjoy the view of Martine</p>
                </div>
              </div>
              <div class="book_btn mt-5">
                <a class="text-white popup-with-form" href="#test-form"
                  >Book A Room</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-5">
            <div class="about_info">
              <div class="section_title mb-20px">
              
                <h3>
                 
                </h3>
              </div>
              <p>
                 Inspired to bring a piece of Asmara to Lusaka. The Hotel was designed to emulate the city’s unique architecture and designs. Our thirty-six rooms are aimed to provide a comfortable & unforgetable stay.
              </p>
              <a href="about.php" class="line-button">Learn More</a>
            </div>
          </div>
          <div class="col-xl-7 col-lg-7">
            <div class="about_thumb d-flex">
              <div class="img_1">
                <img src="img/about/about_1.png" alt="" />
              </div>
              <div class="img_2">
                <img src="img/about/about_2.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about_area_end -->

    <!-- offers_area_start -->
    <div class="offers_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center mb-100">
              <span></span>
              <h3>Services</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-md-4">
            <div class="single_offers">
              <div class="about_thumb">
                <img src="img/offers/1.png" alt="" />
              </div>
              <h3>
                Rooms, Bar  <br />
                rooms and Suites
              </h3>
              <ul>
                <li>Luxury condition</li>
                <li>Adults & 2 Children size</li>
                <li>Friendly welcoming Staff</li>
              </ul>
              <a href="#test-form" class="popup-with-form book_now">book now</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-4">
            <div class="single_offers">
              <div class="about_thumb">
                <img src="img/offers/2.png" alt="" />
              </div>
              <h3>
                Free Parking Space and Security <br />
                For All Customers
              </h3>
              <ul>
                <li>security.</li>
                <li>convinient packing space</li>
                <li>spacious</li>
              </ul>
              <a href="#test-form" class="popup-with-form book_now">book now</a>
            </div>
          </div>
          <div class="col-xl-4 col-md-4">
            <div class="single_offers">
              <div class="about_thumb">
                <img src="img/offers/3.png" alt="" />
              </div>
              <h3>
                Easy location with discounts <br />
                Upon your arival
              </h3>
              <ul>
                <li>Easy to locate</li>
                <li>Google Maps Intergration</li>
                <li>Poolview side</li>
              </ul>
              <a href="https://goo.gl/maps/bnpTCbrSxrP5xR9t8" class="book_now">Find Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- offers_area_end -->

    <!-- video_area_start -->
    <div class="video_area video_bg overlay">
      <div class="video_area_inner text-center">
        <span>Asmara PoolView</span>
        <h3>
          Relax and Enjoy your <br />
          Vacation
        </h3>
        <a
          href="https://www.youtube.com/watch?v=ppvd5jQwQQI"
          class="video_btn popup-video"
        >
          <i class="fa fa-play"></i>
        </a>
      </div>
    </div>
    <!-- video_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7">
            <div class="about_thumb2 d-flex">
              <div class="img_1">
                <img src="img/about/1.png" alt="" />
              </div>
              <div class="img_2">
                <img src="img/about/2.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5">
            <div class="about_info">
              <div class="section_title mb-20px">
                <span>Delicious Food</span>
                <h3>
                  We Serve Fresh and <br />
                  Delicious Food
                </h3>
              </div>
              <p>
                We have all types of meals and drinks, as we serve you the best delicious foodies ever!
              </p>
              <a href="about.php" class="line-button">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- about_area_end -->

    <!-- features_room_startt -->
    <div class="features_room">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title text-center mb-100">
              <span>Featured Rooms</span>
              <h3>Choose a Better Room</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="rooms_here">
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/1.png" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>From K1300/night</span>
                <h3>Twin Superior Room</h3>
              </div>
              <a href="#test-form" class=" popup-with-form line-button">book now</a>
            </div>
          </div>
        </div>
        <div class="single_rooms">
          <div class="room_thumb">
            <img src="img/rooms/2.png" alt="" />
            <div
              class="room_heading d-flex justify-content-between align-items-center"
            >
              <div class="room_heading_inner">
                <span>From K1200/night</span>
                <h3>Double deluxe Room</h3>
              </div>
              <a href="#test-form" class="popup-with-form line-button">book now</a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
    <!-- features_room_end -->

    <!-- forQuery_start -->
    <div class="forQuery">
      <div class="container">
        <div class="row">
          <div class="col-xl-10 offset-xl-1 col-md-12">
            <div class="Query_border">
              <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-md-6">
                  <div class="Query_text">
                    <p>For Reservation 0r Query?</p>
                  </div>
                </div>
                <div class="col-xl-6 col-md-6">
                  <div class="phone_num">
                    <a href="tel:+0211 355 875" class="mobile_no">+0211 355 875</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- forQuery_end-->

    <!-- instragram_area_start -->
    <div class="instragram_area">
      <div class="single_instagram">
        <img src="img/instragram/1.png" alt="" />
        <div class="ovrelay">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="single_instagram">
        <img src="img/instragram/2.png" alt="" />
        <div class="ovrelay">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="single_instagram">
        <img src="img/instragram/3.png" alt="" />
        <div class="ovrelay">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="single_instagram">
        <img src="img/instragram/4.png" alt="" />
        <div class="ovrelay">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="single_instagram">
        <img src="img/instragram/5.png" alt="" />
        <div class="ovrelay">
          <a href="#">
            <i class="fa fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- instragram_area_end -->

    <!-- footer -->
    <?php include ('footer.php') ?>
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form action="{{ route('check-availability') }}" method="POST" id="test-form" class="white-popup-block mfp-hide">
      @csrf
      <div class="popup_box">
        <div class="popup_inner">
          <h3>Check Availability</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-6">
                <input name="check_in_date" id="datepicker" placeholder="Check in date" />
              </div>
              <div class="col-xl-6">
                <input name="check_out_date" id="datepicker2" placeholder="Check out date" />
              </div>
              <div class="col-xl-6">
                <select name="adult_num" class="form-select wide" id="default-select" class="">
                  <option value="0" data-display="Adult"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="0">None</option>
                </select>
              </div>
              <div class="col-xl-6">
                <select name="children_num" class="form-select wide" id="default-select" class="">
                  <option value="0" data-display="Children"></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="0">None</option>
                </select>
              </div>
              <div class="col-xl-12">
                <select name="room_type" class="form-select wide" id="default-select" class="">
                  <option data-display="Room type">Room type</option>
                  @forelse ($room_types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                  @empty
                    <option value="">No Rooms Found</option>
                  @endforelse
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

    <div class="modal" id="chatbot" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/smtp.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/toastr.js"></script>
    <script src="js/booking.js"></script>
  </body>
</html>
