<section class="login-content" style="margin-top:5rem;z-index:10">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Sign In</h2>
                        <p style="color:red"><?php echo $this->session->flashdata('error_message') ?></p>
                        <form action="<?php echo base_url() ?>login/loginCheck" method="post">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="username" id="fullname" required="">
                                    <label class="form-label" for="fullname">Username </label>
                                 </div>
                              </div>
                              
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required="">
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                             
                              
                           </div>
                           <button type="submit" class="btn btn-primary">Sign In</button>
                           <p class="mt-3">
                              Create an Account <a href="<?php echo base_url() ?>main_controller/userSignUp" class="text-primary">Register</a>
                           </p>
                        </form>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </section>