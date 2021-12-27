<section class="login-content" style="margin-top:5rem;z-index:10">
         <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
               <div class="col-md-5 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Sign Up</h2>
                        <p>Create your account.</p>
                        <form action="<?php echo base_url() ?>main_controller/registerUser" method="post">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="name" id="fullname" required="">
                                    <label class="form-label" for="fullname">Name</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="username" id="lastname" required="">
                                    <label class="form-label" for="lastname">Username</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <?php if(isset($error)){ ?>
                                 <span style="color:red"><?php echo $error ?></span>
                                 <?php } ?>
                                    <input class="form-control" type="text" name="email" id="email" required="">
                                    <label class="form-label" for="email">Email</label>
                                    
                                    
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="text" name="phone_number" id="number" required="">
                                    <label class="form-label" for="email">Phone Number</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password" name="password" id="password" required="">
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <input class="form-control" type="password"  id="password1" required="">
                                    <label class="form-label" for="password1">Confirm Password</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="custom-control custom-checkbox mb-3 text-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">I agree with the terms of use</label>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary">Sign Up</button>
                           <p class="mt-3">
                              Already have an Account <a href="<?php echo base_url() ?>Login" class="text-primary">Sign In</a>
                           </p>
                        </form>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </section>