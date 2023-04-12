
		<!--**********************************
			Nav header start
		***********************************-->
		<div class="nav-header">
			<a href="{{ route('dashboard')}}" class="brand-logo">
				<img src="{{ asset('public/dash/images/logo.png') }}" />
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
			Nav header end
		***********************************-->
		
		<!--**********************************
			Chat box start
		***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
								<ul class="contacts">
									{{-- <li class="name-first-letter">Yesterday</li> --}}
									
									<li class="name-first-letter">Today</li>
									
									<li class="dlab-chat-user">
										Nothing.
										{{-- <div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div> --}}
									</li>
									
								</ul>
							</div>
						</div>
						<div class="card chat dlab-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dlab-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
								{{-- <div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div> --}}
								Nothing.
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">BOOKING INQUIRIES</li>
									@forelse(auth()->user()->notifications as $notification)
										<li class="active">
											<div class="d-flex bd-highlight">
												<div class="img_cont primary"></div>
												<div class="user_info">
													<span>{{ $notification->data['msg'] }} from {{ $notification->data['name'] }}</span>
													<p class="text-primary">Today</p>
												</div>
											</div>
										</li>
									@empty
										<p>No notifications</p>
									@endforelse
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
								<ul class="contacts">
									No Notes.
									{{-- <li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li> --}}
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
			Chat box End
		***********************************-->
		
		<!--**********************************
			Header start
		***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<div class="nav-item d-flex align-items-center">
							<div class="input-group search-area">
								<input type="text" class="form-control" placeholder="">
								<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
							</div>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg" width="26.309" height="23.678" viewBox="0 0 26.309 23.678">
								  <path id="Path_1955" data-name="Path 1955" d="M163.217,78.043a7.409,7.409,0,0,1,10.5-10.454l.506.506.507-.506a7.409,7.409,0,0,1,10.5,10.454L175.181,88.686a1.316,1.316,0,0,1-1.912,0Zm11.008,7.823,9.1-9.632.027-.027a4.779,4.779,0,1,0-6.759-6.757l-1.435,1.437a1.317,1.317,0,0,1-1.861,0l-1.437-1.437a4.778,4.778,0,0,0-6.758,6.757l.026.027Z" transform="translate(-161.07 -65.42)" fill="#135846" fill-rule="evenodd"/>
								</svg>
								</a>
							</li>	
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell-link " href="javascript:void(0);">
								<svg xmlns="http://www.w3.org/2000/svg" width="26.667" height="24" viewBox="0 0 26.667 24">
								  <g id="_014-mail" data-name="014-mail" transform="translate(0 -21.833)">
									<path id="Path_1962" data-name="Path 1962" d="M26.373,26.526A6.667,6.667,0,0,0,20,21.833H6.667A6.667,6.667,0,0,0,.293,26.526,6.931,6.931,0,0,0,0,28.5V39.166a6.669,6.669,0,0,0,6.667,6.667H20a6.669,6.669,0,0,0,6.667-6.667V28.5A6.928,6.928,0,0,0,26.373,26.526ZM6.667,24.5H20a4.011,4.011,0,0,1,3.947,3.36L13.333,33.646,2.72,27.86A4.011,4.011,0,0,1,6.667,24.5ZM24,39.166a4.012,4.012,0,0,1-4,4H6.667a4.012,4.012,0,0,1-4-4V30.873L12.693,36.34a1.357,1.357,0,0,0,1.28,0L24,30.873Z" transform="translate(0 0)" fill="#135846"/>
								  </g>
								</svg>
								@if(auth()->user()->notifications->count() > 1)
									<span  style="background: #ff5200" class="badge text-white rounded-circle">{{ auth()->user()->notifications->count() }}</span>
								@endif
								</a>
							</li>	
							<li class="nav-item dropdown notification_dropdown">
								{{-- <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" width="19.375" height="24" viewBox="0 0 19.375 24">
									  <g id="_006-notification" data-name="006-notification" transform="translate(-341.252 -61.547)">
										<path id="Path_1954" data-name="Path 1954" d="M349.741,65.233V62.747a1.2,1.2,0,1,1,2.4,0v2.486a8.4,8.4,0,0,1,7.2,8.314v4.517l.971,1.942a3,3,0,0,1-2.683,4.342h-5.488a1.2,1.2,0,1,1-2.4,0h-5.488a3,3,0,0,1-2.683-4.342l.971-1.942V73.547a8.4,8.4,0,0,1,7.2-8.314Zm1.2,2.314a6,6,0,0,0-6,6v4.8a1.208,1.208,0,0,1-.127.536l-1.1,2.195a.6.6,0,0,0,.538.869h13.375a.6.6,0,0,0,.536-.869l-1.1-2.195a1.206,1.206,0,0,1-.126-.536v-4.8a6,6,0,0,0-6-6Z" transform="translate(0 0)" fill="#135846" fill-rule="evenodd"/>
									  </g>
									</svg>

									<span style="background: #ff5200" class="badge light text-white rounded-circle">0</span>
								</a> --}}
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
										<ul class="timeline">
											No Remainder
											{{-- @forelse(auth()->user()->notifications as $notification)
												<li>
													<div class="timeline-panel">
														<div class="media me-2 media-primary">
															<i class="fa fa-home"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1">Reminder : Treatment Time!</h6>
															<small class="d-block">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
											@empty
												<p>No Notifications</p>
											@endforelse --}}
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									{{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21.6" viewBox="0 0 24 21.6">
									  <g id="_008-chat" data-name="008-chat" transform="translate(-250.397 -62.547)">
										<path id="Path_1956" data-name="Path 1956" d="M274.4,67.347a4.8,4.8,0,0,0-4.8-4.8H255.2a4.8,4.8,0,0,0-4.8,4.8v15.6a1.2,1.2,0,0,0,2.048.848l3.746-3.745a2.4,2.4,0,0,1,1.7-.7H269.6a4.8,4.8,0,0,0,4.8-4.8Zm-2.4,0a2.4,2.4,0,0,0-2.4-2.4H255.2a2.4,2.4,0,0,0-2.4,2.4v12.7l1.7-1.7a4.8,4.8,0,0,1,3.395-1.406H269.6a2.4,2.4,0,0,0,2.4-2.4Zm-15.6,7.2H266a1.2,1.2,0,1,0,0-2.4h-9.6a1.2,1.2,0,0,0,0,2.4Zm0-4.8h12a1.2,1.2,0,1,0,0-2.4h-12a1.2,1.2,0,0,0,0,2.4Z" fill="#135846" fill-rule="evenodd"/>
									  </g>
									</svg> --}}
									<svg xmlns="http://www.w3.org/2000/svg" width="19.375" height="24" viewBox="0 0 19.375 24">
										<g id="_006-notification" data-name="006-notification" transform="translate(-341.252 -61.547)">
										  <path id="Path_1954" data-name="Path 1954" d="M349.741,65.233V62.747a1.2,1.2,0,1,1,2.4,0v2.486a8.4,8.4,0,0,1,7.2,8.314v4.517l.971,1.942a3,3,0,0,1-2.683,4.342h-5.488a1.2,1.2,0,1,1-2.4,0h-5.488a3,3,0,0,1-2.683-4.342l.971-1.942V73.547a8.4,8.4,0,0,1,7.2-8.314Zm1.2,2.314a6,6,0,0,0-6,6v4.8a1.208,1.208,0,0,1-.127.536l-1.1,2.195a.6.6,0,0,0,.538.869h13.375a.6.6,0,0,0,.536-.869l-1.1-2.195a1.206,1.206,0,0,1-.126-.536v-4.8a6,6,0,0,0-6-6Z" transform="translate(0 0)" fill="#135846" fill-rule="evenodd"/>
										</g>
									</svg>
									@if(auth()->user()->notifications->count() > 1)
										<span style="background: #ff5200" class="badge text-white rounded-circle">{{ auth()->user()->notifications->count() }}</span>
									@endif
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
									<ul class="timeline">
										@forelse(auth()->user()->notifications as $notification)
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="javascript:void(0);">
													<span>{{ $notification->created_at->diffForHumans() }}</span>
													<h6 class="mb-0">{{ $notification->data['msg'] }}</h6>
												</a>
											</li>
										@empty
											<p>No Notifications.</p>
										@endforelse
									</ul>
								</div>
								</div>
							</li>
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX///8AAAC8vLz6+vq3t7eMjIyhoaHv7+/Y2NiRkZF3d3fOzs6ZmZmtra2Dg4OIiIjn5+dra2svLy9WVlb29vbe3t4SEhILCwvu7u59fX1BQUE6OjrDw8O5ublhYWFQUFApKSkiIiIbGxtHR0dcXFxoaGg1NTWXl5dxcXEtLS0YGBg2hXjgAAAItUlEQVR4nO2daXuyOhCGQSjYiogrqLhVa5f//wMPy0w2UiWI55z0mudD30ISyE22STLp6zgkEolEIpFIJBKJRCKRSCQSiUQikUgkEolEIpFI/5qCnf+XtQucwX/9iZ+sARFaLyK0X0Rov4jQfhGh/SJC+0WE9osI7RcR2i8itF9EaL+I0H6ZE3qoFlGFn2YKk0phh6SqjAkXx3RVKn1f3IvqHb9nhVZL82xN3EpT85QNGRMOXNTdhB5EHJpn67VO+WaesiFjwg9G+HEvqp2Emct1r5raSTgWCMd34tpJOBcIz3fiPkD4Uqf8Mk/ZkCGhWEldN7kd+QHCZV6pQ8qGDAkDiTC4HfkBwh5lSPhe5/lU/7PVxvGyJKtG+RuEisXQzoCAuIUhYGJEmBEuIc8+/Nscy8PgUIVcfJVwFFQqanYYVXHOEZgsg6/yi11j4Uvkr1GhT8gbJC3eFn5uq0ceguw5hNABzLEsX9UI4x9WhQ+JIxGCmVK8cIVR0ry4P9ywJLH6IuhpIOnOyVnSu02kIyHUzrHzBtVUqS5rsZWmiUQImc5zMc7SGYmXe3yQPFpgUimu8D36I8Q3JA5mU25isZQD9/qjIZT7qmsoJ3m5RSgnLcu0d0IouXIc1H3HgauXRJjKYSclbnKDUNW1VYdjQriA7JS2zLT+9UcTfJtQpxPHju4QXvf7mfLgHgmxapbfGctrxIOZQTcdZlny+Svhepllyy8eHGRhONrCxf4m4WxUFJvH6krUNyGU27X8HUcCwXLcyu/FfkYljKSHFf1HdblABu8G4QqGlx1ct+prDAixUwikHLJgJLrgjaGeUAnF7hOCV7cIWVbhupXZakCItbAea331rRjMG8dFR4hE2UpOj8+7Rag+udUSgAEhTCs2kEOlDHAsvArP1hFOIND7rq9HSuQbhAf25PVTCBEJmzeWEJpP0AyFtoFtSyLEEc+ZyUXegnDCnhw/hRDHWyTCWunDNVwKxpS36peQd53PIYRaNRvUypFwLhP6QpKtVYQ4rWgq+ZXwbBXh66+EgUQoLt5IEP97Qm4rqTpIhMKESp4f/t8J5YmLrLqaQpUUVlGxYttBKM38FH1WMWCaKqyiRh0Ib9k0TyVk84ZUFNw7VlHQWOQNEb+AFYQ4rXj1FoKOIgKO7y5uGLFit4IQJzvy0hP2r7WxAfNj973KtIeXdhBi+bzLt9nsobriI+Zm8rp3uWwgRMP/U77t4RBSz/GESa8kGwgPkFd1fRSXniAn4qZGWZQf1hDi3HemBuAoeaqHCI8vfZbKvqwhxIGtsQDMBhF8CO9e3O/EkcoQxks2BTrJhDjYeCKTvCLM2wh003f3aFsTjutV9ai517SrQ4Icbww/6kXSbVRkdVAnq+dbsDQ/Uh6Kk7ElPMkRI+eONqmT1zdaDQP9e5tkyzwfdnBOeJbIn8Z+EaH9IkL7RYT2iwjtFxHaLyK0X0TYTaEfxdPpG99LTMbRejpdV6vFlcta9HrXEb4nPYMwwaVE9F0cwZ5G7cWAqzi9v1evJxByNxPY8ue7OtWmP/zex1mKNnoC4UEh9E5/jJAXIRAK7m5/g1Dw5q89T4QVxmrP33pC9EH0l8N6LRRWwo/5sl6CS2fVWSF7CcEdjDu/QEfKvEFha67n1/6q/glhqOAbpbDUP7qR5pnqTLjIg/X+cHkLcqU0gJB7nUg+J84vZ/YyPyjMgPFIV7QQNuxyzK8zoegf6u5Z8eTreHKtb14mcfziBHEcw2AxLX6tdh7cshl+p0I7XARb9rD5TgYJoysLm+aOuboRKg7d7hd8esUTe+Vd5BvV5lWjL81PUqSNWJ/HKylsbr5d0IXQO7iqtqGO8OTtlWg6QtVBXXRRnzbCjJtzF8ImIA59XQjHblNYUhdNmCliB0K9/9eXhjD1lF3h7yah1l8OTHat83tqOJCaEzKr7Gc9GO1i1k7KvnI4Hvvw3d/Gxe9OXvyAXuSluLFrErIKcXmJ1sy1rCoo5ghxfvEHn+xjGR5KNCfEprGvsxjisVk8jQgfno+HcyHTDUI276iCPfTBqSiwisPAM4KjSJrTVr0SYhFyl2QsBRjwJkaEaLRiKBR42azRKZk9CV/NXAGeQ4hNjX9IbElxF0K4YDvy6NeSsDcJJ1Xhzslo6Dcm3KtFqLq4GxFiU2NDeXI+lDovNeYfc1wy6mtMCRffjfdif58m5oTogaFb0kD4JVeqfI82MiXEtiCOSthb1BXXiBDq3bfOHHV/1b1D5JK6Eor9mewpa0QI5p/uVLhybk9U28OVlboSZpp7NYMRIRjwYqtGycfGJbU60YXqSig6D2EZ/i1C8ejfA+0QRviNpv+HjnO1jlWtn9rThHDyVUw16E6II9yNnubR5Q7j8RAsGNE4BLsEDq0aEQoDfK3hbFvqXHBJZ4q6y5gQAFJerxZgL06lCO0IsQmz2IBcWm3QRkUbrfVfNxJkTIhWCPfERNdgeFAnq22rRC6rCJYv77YH102po1HFNZ9boJcsLjWhWbJyuhDiZAJKCs8ElH0J2mhnLDPsXYUjjk8hZH8xYFrNCNmSFCKZEbIJ8FfRT3lo1h+rMFwNWvkVI1sMMDJpuszxlXk7iHlImxFqVmJY3PCd3bge+IqbbvDslzBMdZliZpwhYaJ51hpiag9bvd/5qzg9EPLVBUF8EDYkdPLGs9jRYk2Y6Qy/43rp8qS+Vhi0TAkbGB/CaJCclcCrYQl2XvMOxIXaVFpWMCZ0QrEtnpT85OIJh6NZJ1Op877FaDLfHk/H7XydK8vw9R8E5GNWVt9gsepLqSyS8cd5djptD7FmNXQYXTbFmzbzl06bOw/tPS1Co79n9MDDFmFn85T8aewXEdovIrRfRGi/iNB+EaH9IkL7RYT2iwjtFxHaLyK0X0Rov4jQfhGh/SJC+zVwfP7/jP1FFXz+4G/Lv1/MJBKJRCKRSCQSiUQikUgkEolEIpFIJBKJRCKRSH3pH3kKeLSbWfmAAAAAAElFTkSuQmCC" width="20" alt=""/>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="{{ route('profile.show') }}" class="dropdown-item ai-icon">
										<svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									{{-- <a href="{{ route('email')}}" class="dropdown-item ai-icon">
										<svg id="icon-inbox1" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a> --}}
									<form method="POST" action="{{ route('logout') }}">
										@csrf
										<button type="submit" class="dropdown-item ai-icon">
											<svg  xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
											<span class="ms-2">Logout </span>
										</button>
										{{-- <x-dropdown-link href="{{ route('logout') }}"
												 @click.prevent="$root.submit();">
											{{ __('Log Out') }}
										</x-dropdown-link> --}}
									</form>
									
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
			Header end ti-comment-alt
		***********************************-->
