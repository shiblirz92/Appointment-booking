<div class="iq-top-navbar" >
   <div class="container">
      <div class="iq-navbar-custom">
         <div class="d-flex align-items-center justify-content-between">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
               <i class="ri-menu-line wrapper-menu"></i>
               <a href="<?php echo base_url() ?>" class="header-logo">

               <h3 style="font-size:1rem">  <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="Apex Hospital">Apex Hospital</h3>
               <img src="<?php echo base_url() ?>assets/images/logo-white.png" class="img-fluid rounded-normal darkmode-logo d-none" alt="logo">

      
               </a>
            </div>
            <div class="iq-menu-horizontal" >
               <nav class="iq-sidebar-menu">
                  <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                     <a href="<?php echo base_url() ?>" class="header-logo">
                     <img src="<?php echo base_url() ?>assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                     </a>
                     <div class="iq-menu-bt-sidebar">
                        <i class="las la-bars wrapper-menu"></i>
                     </div>
                  </div>
                  <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                     <li class="active">
                        <a href="<?php echo base_url() ?>" class="">
                        <span>Homepage</span>
                        </a>
                     </li>
                     <!-- <li class=" ">
                        <a href="<?php echo base_url() ?>main_controller/profile" class="">
                        <span>Profile</span>
                        </a>
                     </li> -->
                     <li class=" ">
                        <a href="<?php echo base_url() ?>userProfile" class="">
                        <span>About</span>
                        </a>
                     </li>
					 
                     <!-- <li class=" "> -->
                        <a href="#pages" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <!-- <span>Extra Pages</span> -->
                        <!-- <i class="ri-arrow-right-s-line iq-arrow-right"></i> -->
                        </a>
                        <ul id="pages" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                           <li class=" ">
                              <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                              <span>UI Elements</span>
                              <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                              </a>
                             
                           </li>
                        </ul>
                  </ul>
               </nav>
            </div>
            <?php if($this->session->userdata('user_id')){ ?>
              
              <a href="<?php echo base_url() ?>main_controller/profile"><button type="submit"   class="btn btn-primary"><?php echo $this->session->userdata('username')?></button></a>
              
                        <?php } else { ?>
                        
                        <a href="<?php echo base_url() ?>Login"><button type="submit"   class="btn btn-primary">Login</button></a>
                        <?php } ?>
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               
               <div class="change-mode">
                  <div class="custom-control custom-switch custom-switch-icon custom-control-indivne">
                     <div class="custom-switch-inner">
                
                        </div>
                        <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                        <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                        <span class="switch-icon-left"><i class="a-left"></i></span>
                        <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                        
                        </label>
                        <?php if($this->session->userdata('user_id')){ ?>
                      <a href="<?php echo base_url() ?>login/logout">  <span class="switch-icon-right">Logout</span></a>
                      <?php } ?>
                     </div>
                  </div>
               </div>
               
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list align-items-center">
                     <li class="nav-item nav-icon dropdown ml-3">
                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <!-- <i class="las la-envelope"></i>		 -->
              </a>
              <!-- <?php if($this->session->userdata('user_id')){ ?>
              
              <a href="<?php echo base_url() ?>main_controller/profile"><button type="submit"   class="btn btn-primary"><?php echo $this->session->userdata('username')?></button></a>
              
                        <?php } else { ?>
                        
                        <a href="<?php echo base_url() ?>Login"><button type="submit"   class="btn btn-primary">Login</button></a>
                        <?php } ?> -->
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   </div>
</div>