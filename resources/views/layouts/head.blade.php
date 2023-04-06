
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
        const siteBase = '/asmara/asmarahotel/';
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
    @include('layouts.menu')
    <!-- header-end -->