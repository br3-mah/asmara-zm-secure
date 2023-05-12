<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:title" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name', 'Amsara Hotel Zambia') }}</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('public/dash/images/favicon.png')}}" />
	<link href="{{ asset('public/dash/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('public/dash/vendor/owl-carousel/owl.carousel.css')}} " rel="stylesheet">
	<link href="{{ asset('public/dash/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <!-- Datatable -->
    <link href="{{ asset('public/dash/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
	<!-- Style css -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <link href="{{ asset('public/dash/vendor/fullcalendar/css/main.min.css')}}" rel="stylesheet">
	<link href="{{ asset('public/dash/css/style.css')}}" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Styles -->
    @livewireStyles
	<style>
		.pagination svg {
			height: 1rem;
			width: 1rem;
		}

		@media (max-width: 767px) {
			.pagination svg {
				height: 0.875rem;
				width: 0.875rem;
			}
		}
	</style>
</head>
<body>

	<!--*******************
		Preloader start
	********************-->
	<div  id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
		Preloader end
	********************-->

	<!--**********************************
		Main wrapper start
	***********************************-->
	<div id="main-wrapper">
        @include('navigation-menu')
        @include('layouts.side')	
	
        <main>
            {{ $slot }}
        </main>
		<!--**********************************
			Footer start
		***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="https://greenwebbb.com/" target="_blank">Greenwebb</a> 2023</p>
			</div>
		</div>
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->
		
		<!--**********************************
		   Support ticket button end
		***********************************-->


	</div>
	<!--**********************************
		Main wrapper end
	***********************************-->

	<!--**********************************
		Scripts
	***********************************-->
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

	<!-- Required vendors -->
	<script src="{{ asset('public/dash/vendor/global/global.min.js')}}"></script>

	<script src="{{ asset('public/dash/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
	
	<!-- Apex Chart -->
	
	<script src="{{ asset('public/dash/vendor/apexchart/apexchart.js')}}"></script>
	
	
	<!-- Chart piety plugin files -->
		<!-- Apex Chart -->
	
    <!-- Datatable -->
    <script src="{{ asset('public/dash/vendor/datatables/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('public/dash/js/plugins-init/datatables.init.js') }} "></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('public/dash/js/dashboard/dashboard-1.js')}}"></script>
	
	<script src="{{ asset('public/dash/vendor/owl-carousel/owl.carousel.js')}}"></script>
	<script src="{{ asset('public/dash/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{ asset('public/dash/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
	
    <!-- pickdate -->
    <script src="{{ asset('public/dash/vendor/pickadate/picker.js')}}"></script>
    <script src="{{	asset('public/dash/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{	asset('public/dash/vendor/pickadate/picker.date.js')}}"></script>

	
    <!-- Datatable -->
    <!-- Daterangepicker -->
    {{-- <script src="{{ asset('public/dash/js/plugins-init/bs-daterange-picker-init.js')}}"></script> --}}
    {{-- <script src="{{ asset('public/dash/js/plugins-init/clock-picker-init.js')}}"></script> --}}
    {{-- <script src="{{ asset('public/dash/js/plugins-init/jquery-asColorPicker.init.js')}}"></script> --}}
    {{-- <script src="{{ asset('public/dash/js/plugins-init/pickadate-init.js')}}"></script> --}}

	<script src="{{asset('public/dash/vendor/moment/moment.min.js')}}"></script>

	<script src="{{ asset('public/dash/js/custom.min.js')}}"></script>
	<script>
		function TravlCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:15,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
					responsive:{
						0:{
							items:1
						},
						
						768:{
							items:2
						},			
						
						1400:{
							items:2
						},
						1600:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					TravlCarousel();
				}, 1000); 
			});
	</script>
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});
		
		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @stack('modals')

    @livewireScripts
</body>

<!-- Mirrored from travl.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 20:05:31 GMT -->
</html>