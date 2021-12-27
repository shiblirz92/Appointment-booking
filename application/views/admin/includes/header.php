<div class="nav-header">
            <a href="index.html" class="brand-logo">
                <!-- <img class="logo-abbr" src="images/logo.png" alt="">
                <img class="logo-compact" src="images/logo-text.png" alt="">
                <img class="brand-title" src="images/logo-text.png" alt=""> -->
				<h1>Apex Hospital</h1>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                           
							
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                                    
									<div class="header-info">
										<span>Hello,<strong><?php echo $this->session->userdata('adminname')?></strong></span>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="" class="dropdown-item ai-icon">
                                    
                                    <a href="<?php echo base_url() ?>admin/login/logout" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
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

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="<?php echo base_url() ?>admin">Dashboard</a></li>
							<li><a href="<?php echo base_url() ?>admin/booking">Bookings</a></li>
							<li><a href="<?php echo base_url() ?>admin/booking/getBookings">Live Patients</a></li>
							<li><a href="<?php echo base_url() ?>admin/doctor">Doctor</a></li>
							
							<li><a href="<?php echo base_url() ?>admin/booking/adminDetails">Add Admin</a></li>
						</ul>
                    </li>
                   
                   
                    
                    
                    
                    
                   
                            <!-- <li><a href="page-lock-screen.html">Lock Screen</a></li> -->
                        </ul>
                    </li>
                </ul>
            
				
				<div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Apex Hospital Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by Shibli</p>
				</div>
			</div>
        </div>