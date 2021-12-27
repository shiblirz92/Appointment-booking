<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">LiveBookings</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Get Live Bookings</h4>
                            </div>
                            <div class="card-body">
                            <form action="<?php echo base_url() ?>admin/booking/livePatients" method="get" enctype="fortm-data/multipart">
            <div style="justify-content:center" class="row">
                
            <!-- display:flex;justify-content:space-around -->
            <div style="" class="col-lg-12">
                <?php if($this->session->flashdata('message')) { ?>
            <div class="alert alert-success" role="alert">
                        <div class="iq-alert-text"><?php echo $this->session->flashdata('message') ?></div>
                     </div>

                     <?php } ?>
           
            <br>
            
            <div style="padding:1.5rem;display:flex;justify-content:space-between;flex-wrap:wrap">
            <br>
                
                <div style="flex:1 20%">
                    <label for="">Department</label><br>
                        <select style="width:18rem;padding:1rem"  name="department" id="department" required>
                        <option value="">Select Department</option>
                        <?php foreach($specialization as $value) { ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->specialization ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                    <div style="flex:1 20%">
                    <label for="doctor">Select Doctor</label><br>
                        <select style="width:18rem;padding:1rem" name="doctor" id="doctor" required>
                            <option value="">Select Doctor</option>
                            
                        </select>
                    </div>

                   
                <div style="padding:1.5rem;display:flex;justify-content:space-around;flex-wrap:wrap">
                    
                    <div>
                    
                        <button type="submit"   class="btn btn-primary">Proceed <?php  ?></button>
                        
                    </div>
                    
                </div>
                
                  
               </div>
            </div>
         </div>

         
              <!-- <form action="">
              
                       
                           fhjkfh
                       </div>

                       </div>
                   
                  <input type="text" class="date" id="date"><br>
              </form> -->
            </div>
         </div>
      </div>
     
      
   </div>
</div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const department = document.getElementById('department');
            const doctor = document.getElementById('doctor');
   

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

        console.log(result);
           const html=`<option value="${result.id}">${result.name}</option>`
           doctor.insertAdjacentHTML('beforeend',html)

       })
       
   })
        </script>