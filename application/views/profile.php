
      <div class="content-page" style="margin-top:5rem;z-index:10">
        <div class="container-fluid container">
      <div class="row">
         <div class="col-lg-12">
            <div class="card car-transparent">
               <div class="card-body p-0">
                  <div class="profile-image position-relative">
                     <h1 style="color:#085b86">Profile Section</h1>
                  </div>
                  <div class="profile-overly">
                     <h3><?php echo $userDetails->name ?></h3>
                     
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-body text-center">
               </a>

                  
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                   <h1>Personal Details</h1><br>
               <form action="<?php echo base_url() ?>" method="post">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" value="<?php echo $userDetails->name ?>" type="text" name="username" id="fullname" required="">
                                    <label class="form-label" for="fullname">Name </label>
                                 </div>
                              </div>
                              
                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" value="<?php echo $userDetails->email ?>" type="text" name="username" id="fullname" required="">
                                    <label class="form-label" for="fullname">Email </label>
                                 </div>
                              </div>

                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                <small> <label class="" for="fullname">Username </label></small>
                                    <input class="form-control" value="<?php echo $userDetails->username ?>" type="text" name="username" id="fullname" required="" disabled>
                                    
                                 </div>
                              </div>

                              <div class="col-lg-12">
                                 <div class="floating-input form-group">
                                    <input class="form-control" value="<?php echo $userDetails->password ?>" type="password" name="password" id="password" required="">
                                    <label class="form-label" for="password">Password</label>
                                 </div>
                              </div>

                              

                             
                             
                              
                           </div>
                          
                         
                        </form>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-body text-center">
                <a href="<?php echo base_url() ?>main_controller/tracking"> <i style="font-size:8rem;color:orange" class="fas fa-map-marker-alt"></i>
                  <!-- <h2 class="mb-2 mt-3 text-primary">42+</h2> -->
                  <h4>Track Your Appointments</h4></a>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-header">
                  <div class="header-title">
                     <h4 class="card-title">Appointments</h4>
                  </div>
               </div>
               <div class="card-body">
               <div class="card-body">
                  <div class="table-responsive data-table">
                     <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="DataTables_Table_0_length"></div><div id="DataTables_Table_0_filter" class="dataTables_filter"></div><table class="data-tables table dataTable no-footer" style="width: 100%;" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                     <thead>
   <tr role="row">
   <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone No.: activate to sort column ascending" style="width: 10px;">Sl.No</th>
      <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Profile: activate to sort column descending" style="width: 83px;">Patient Name</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 88px;">Doctors</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 50px;">Appointment Date</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone No.: activate to sort column ascending" style="width: 188px;">Description</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Phone No.: activate to sort column ascending" style="width: 50px;">Booked On</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 95px;">Action</th>
   </tr>
</thead>
                        <tbody>
                           
                           
                           
                           
                           
                           
                           
                           
                           
                           
                        <!-- <tr role="row" class="odd">
                              <td class="sorting_1">
                                 <img src="../assets/images/user/01.jpg" class="rounded avatar-40 img-fluid" alt="">
                              </td>
                              <td>Anna Sthesia</td>
                              <td>annasthesia@gmail.com</td>
                              <td>(760) 756 7568</td>
                              <td>
                                 <div class="d-flex align-items-center list-action">
                                    <a class="badge bg-warning-light mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rating" href="#"><i class="far fa-star"></i></a>
                                    <a class="badge bg-success-light mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a>
                                    <span class="badge bg-primary-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Action" href="#">
                                          <div class="dropdown">
                                             <span class="text-primary dropdown-toggle action-item" id="moreOptions1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                                
                                             </span>
                                             <div class="dropdown-menu" aria-labelledby="moreOptions1">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                                <a class="dropdown-item" href="#">Hide from Contacts</a>
                                             </div>
                                          </div>
                                    </span>
                                 </div>
                              </td>
                           </tr>-->
                           <?php foreach($booking as $key=>$value) { ?>
                           <tr role="row" class="even"> 
                              <td class="sorting_1">
                              <?php echo $key+1?>
                              </td>

                              <?php 
                              
                              $this->db->where('id',$value->doctor_id);
                              $query=$this->db->get('doctors');
                                $doctor=$query->row();
                                
                              
                              ?>
                              <td><?php echo $value->patient_name?></td>
                              <td><?php echo $doctor->name?></td>
                              <td><?php echo $value->booking_date?></td>
                              <td><?php echo $value->description?></td>

                              <td><?php echo $value->added_on?></td>

                              <td>
                                 <div class="d-flex align-items-center ">
                                    <!-- <a class="badge bg-warning-light mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rating" href="#"><i class="far fa-star"></i></a>
                                    <a class="badge bg-success-light mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="View" href="#"><i class="lar la-eye"></i></a> -->
                                  <a href="<?php echo base_url() ?>booking/checked/<?php echo $value->id ?>/<?php echo $value->doctor_id ?>">  <button type="update"  class="btn btn-danger">Cancel</button> </a> <br>
                                    <?php if($value->booking_date==date('d/m/Y')) { ?>
                                   <a href="<?php echo base_url() ?>main_controller/liveStatus?doctor=<?php echo $value->doctor_id ?> "> <button style="margin-left:1rem" type="update" class="btn btn-success">Live Status</button></a>
                                    <?php } ?>
                                       <div class="dropdown">
                                         
                                 
                                          </span>
                                          <div class="dropdown-menu" aria-labelledby="moreOptions1">
                                             <!-- <a class="dropdown-item" href="#">Edit</a>
                                             <a class="dropdown-item" href="#">Delete</a>
                                             <a class="dropdown-item" href="#">Hide from Contacts</a> -->
                                             
                                          </div>
                                       </div>
                                    </span>
                                 </div>
                              </td>
                           </tr>
                           <?php } ?>
                          
                        </tbody> 
                     </table></div>
                     <!-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">Previous</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">Next</a></div> -->
                  </div>
               </div>
               </div>
            </div>
         </div>
         
             
         </div>
        
        </div>
      </div>
    </div>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="popup text-left" id="popup">
              <h4 class="mb-3">Add Action</h4>
              <div class="content create-workform">
                <div class="form-group">
                  <h6 class="form-label mb-3">Copy Your Link</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly="" value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><i class="las la-link"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h6 class="form-label mb-3">Email Your Link</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly="" value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon3"><i class="las la-envelope"></i></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <h6 class="form-label mb-3">Add to Your Website</h6>
                  <div class="input-group">
                    <input type="text" class="form-control" readonly="" value="calendly.com/rickoshea1234">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon4"><i class="las la-code"></i></span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 mt-3">
                  <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                    <button type="submit" data-dismiss="modal" class="btn btn-primary mr-4">Cancel</button>
                    <button type="submit" data-dismiss="modal" class="btn btn-outline-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>