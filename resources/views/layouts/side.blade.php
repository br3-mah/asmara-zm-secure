
		<!--**********************************
			Sidebar start
		***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li>
                        <a class="has-arrow" href="{{ route('dashboard') }}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Dashboard</span>
						</a>
						{{-- <ul aria-expanded="false">
							<li><a href="index.html">Dashboard Light</a></li>
							<li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="guest-list.html">Guest List</a></li>
							<li><a href="guest-details.html">Guest Details</a></li>
							<li><a href="concierge-list.html">Concierge List</a></li>
							<li><a href="room-list.html">Room List</a></li>
							<li><a href="reviews.html">Reviews</a></li>	
						</ul> --}}
					</li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Bookings</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ route('reservations') }}">Reservations</a></li>
							<li><a href="{{ route('bookings') }}">Bookings</a></li>
							<li><a href="{{ route('calendar') }}">Calendar</a></li>
						</ul>
					</li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">CMS</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ route('manage-rooms') }}">Rooms</a></li>
							<li><a href="{{ route('manage-room-types') }}">Room Types</a></li>
						</ul>
					</li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text">Reports</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ route('guest-reports') }}">Visitors Reports</a></li>
							<li><a href="{{ route('booking-reports') }}">Booking Reports</a></li>
						</ul>
					</li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-025-info"></i>
							<span class="nav-text">Customer Support</span>
						</a>
						<ul aria-expanded="false">
							{{-- <li><a href="{{ route('chatbot') }}">Chatbot</a></li> --}}
						</ul>
					</li>
					<li>
                        <a href="{{ route('inquiries') }}" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Inquiries</span>
						</a>
					</li>
					<li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-050-info"></i>
							<span class="nav-text">Settings</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="{{ url('user/profile') }}">Account Settings</a></li>
						</ul>
					</li>
					<li>
                        <a href="{{ route('email') }}" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">Email</span>
						</a>
					</li>
					
				</ul>
				{{-- <div class="dropdown header-profile2 ">
					<div class="header-info2 text-center">
						<img src="images/profile/pic1.jpg" alt=""/>
						<div class="sidebar-info">
							<div>
								<h5 class="font-w500 mb-0">William Johanson</h5>
								<span class="fs-12">williamjohn@mail.com</span>
							</div>	
						</div>
						<div>
							<a href="javascript:void(0);" class="btn btn-md text-secondary">Contact Us</a>
						</div>
					</div>
				</div> --}}
				<div class="copyright">
					<p class="text-center"><strong>Asmara Hotel Admin Dashboard</strong> © 2023 All Rights Reserved</p>
					<p class="fs-12 text-center">Made with <span class="heart"></span> by Greenwebb</p>
				</div>
			</div>
		</div>
		<!--**********************************
			Sidebar end
		***********************************-->
	