<div class="content-page">
        <div class="container-fluid container">
         <div class="row">
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height blog">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Live Patient Tracking </h4>
                     </div>
                  </div>
                  <div class="card-body">
                  <div class="col-md-12 col-sm-12 col-12 align-self-center">
                  <div class="card">
                     <div class="card-body text-center">
                        <h2>Select Details</h2>
                        <br>
                        <form action="<?php echo base_url() ?>main_controller/liveStatus" method="get">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <Select class="form-control" type="text" name="department" id="department" required="">
                                    <option value="">Select Department</option>
                                    <?php foreach($specialization as $value) { ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->specialization ?></option>
                            <?php } ?>
                                </select>
                                    <!-- <label class="form-label" for="fullname">Select Department</label> -->
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="floating-input form-group">
                                    <select class="form-control" type="text" name="doctor" id="doctor" required="">
                                        <option value="">Select Doctor</option>
                                    </select>
                                    <!-- <label class="form-label" for="lastname">Last Name</label> -->
                                 </div>
                              </div>
                              <button type="submit"   class="btn btn-primary">Check <?php  ?></button>
            
                           </div>
                           
                        </form>
                     </div>
                  </div>
                  </div>
                  </div>
               </div>
            </div>
         
         </div>
        </div>
      </div>

      <script>
          const department = document.getElementById('department');
          const doctor = document.getElementById('doctor');
          const list = document.getElementById('list');
          const total_patient = document.getElementById('total_patient');
   

   department.addEventListener('change',async function(){


       var i;
       for(i=doctor.length-1;i>=1;i--)
       {
           doctor.remove(i);
       }

       console.log(doctor.length);
       console.log(department.value);
       const url= "<?php echo base_url().'booking/fetchDoctor/'?>"+department.value;
       const response = await fetch(url).then(result=>result.json()).then(data=>data);
       console.log(response);

       response.map((result)=>{

           const html=`<option value="${result.id}">${result.name}</option>`
           doctor.insertAdjacentHTML('beforeend',html)

       })
       
   })


      </script>