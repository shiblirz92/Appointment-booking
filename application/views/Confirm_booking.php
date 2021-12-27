<style>
    /* #datepicker,
.ui-datepicker,
.ui-datepicker-header,
.ui-datepicker-calendar {
  width: 50%;
}

.ui-datepicker-calendar { */
  /* background: dodgerblue; */
/* }
.ui-datepicker-header {
  text-align: center;
  color: #fff;
  background: #000;
}
.ui-datepicker-prev {
  float: left;
}
.ui-datepicker-next {
  float: right;
} */

.ui-datepicker {
background-color: #fff;
}

.ui-datepicker-header {
background-color: #616eff;
}

.ui-datepicker-title {
color: white;
}

.ui-widget-content .ui-state-default {
border: 0px;
text-align: center;
background: #fff;
font-weight: normal;
color: #000;
}

.ui-widget-content .ui-state-default:hover {
border: 0px;
text-align: center;
background: #000;
font-weight: normal;
color: #fff;
}

.ui-widget-content .ui-state-active {
border: 0px;
background: #616eff;
color: #fff;
}
</style>

<div style="margin-top:10rem" class="main-slider">
   <div class="slider-content parallax position-relative overflow-hidden back-mountent h-100">
      <div class="slider-top-banner">
         <div class="container">
             <form action="<?php echo base_url() ?>booking/insert_booking" method="post" enctype="fortm-data/multipart">
            <div style="justify-content:center" class="row">
                
            <!-- display:flex;justify-content:space-around -->
            <div style="" class="col-lg-12">
                
            <h1>Patient Details</h1>
            <br>
            <span  onclick="addPatient()" id="addPatient" class="btn btn-primary" style="display:none">Add Patient</span>
            <div style="padding:1.5rem;display:flex;justify-content:space-between;flex-wrap:wrap">
            <br>
                
                <div style="flex:1 20%">
                    <label for="">Department</label><br>
                        <select style="width:15rem;padding:1rem"  name="department" id="department" required disabled>
                        <option value="<?php echo $department[0]->id ?>"><?php echo $department[0]->specialization ?></option>
                        <!-- <?php foreach($specialization as $value) { ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->specialization ?></option>
                            <?php } ?> -->
                            
                        </select>
                        <input value="<?php echo $department[0]->id ?>" name="department" type="hidden">
                    </div>
                    <div style="flex:1 20%">
                    <label for="doctor">Select Doctor</label><br>
                        <select style="width:15rem;padding:1rem" name="doctor" id="doctor" required disabled>
                            <option value="<?php echo $doctor[0]->id ?>"><?php echo $doctor[0]->name ?></option>
                            
                        </select>
                        <input value="<?php echo $doctor[0]->id ?>" name="doctor" type="hidden">
                    </div>

                    <!-- <?php echo date('d/m/y') ?> -->
                    <!-- <div style="flex:1 20%">
                    <label for="">Gender</label><br>
                        <select style="width:18rem;padding:1rem" name="gender" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                    </div> -->
                    <br>
                    <div style="flex:1 20%">
                    <label for="">Choose Appointment Date</label><br>
                        <input style="width:15rem;padding:1rem;text-align:center;font-size:1.5rem;letter-spacing:0.5rem" name="booking_date" style=";" type="text" value=""  id="date" readonly >
                    </div>
                </div>

            <div id="patient">
                
                <!-- <div style="padding:1.5rem;display:flex;justify-content:space-between;flex-wrap:wrap">
                    <div>
                        <label for="">First Name</label><br>
                        <input style="width:15rem;padding:1rem" name="name[]" type="text" required>
                    </div>
                   
                    <div>
                    <label for="">Gender</label><br>
                        <select style="width:15rem;padding:1rem" name="gender[]" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                    </div>
                    <div>
                    <label for="">Age</label><br>
                        <input style="width:15rem;padding:1rem" name="age[]" type="text">
                    </div>
                    <div>
                    <label for="">Diseases Discription</label><br>
                        <textarea  name="description" name="" id="" cols="30" rows="3"></textarea>
                    </div>

                </div> -->
                

                </div>


                
                <!-- <div style="padding:1.5rem;display:flex;justify-content:space-around;flex-wrap:wrap">
                     <div>
                        <label for="">name</label><br>
                        <input type="text">
                    </div>
                    <div>
                    <label for="">name</label><br>
                        <span  onclick="addPatient()" class="btn btn-primary">Add Patient</span>
                    </div> -->

                    <!-- <?php echo date('d/m/y') ?> -->
                    <!-- <div style="">
                    <label for="">Choose Appointment Date</label><br>
                        <input style="width:18rem;padding:1rem" name="booking_date" style="text-align:right;" type="text" value="<?php echo date('d-m-y') ?>" id="date" readonly> <span style="width:2.5rem;height:2.5rem"><img style="width:inherit;height:inherit" src="<?php echo base_url() ?>assets/calculator.jpg" alt=""></span>
                    </div>
                </div> -->
                <div style="padding:1.5rem;display:flex;justify-content:space-around;flex-wrap:wrap">
                    
                    <div>
                    
                        <button type="submit" disabled id="bookNow"  class="btn btn-primary">Book Now</button>
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

 <script>
    const doctor = document.getElementById('doctor');
    
    window.blocked_dates= null;
    window.a= null;
doctor.addEventListener('change',async function(){

    addButton.removeAttribute('disabled');

    // const datesurl= `<?php echo base_url().'booking/fetchBookedDates?'?>doc=${doctor.value}`
    //         // const url= "<?php echo base_url().'booking/fetchDate/'?>"+booking_date+"/"+doctor.value
    //     const datesresponse = await fetch(datesurl).then(result=>result.json()).then(data=>data);
    //     b=datesresponse.disable
    //     console.log(datesresponse.disable);
    //     console.log(datesresponse.disable);
    //     window.a=datesresponse.disable
        
    //    window.blocked_dates ="'"+  a.split( "," ).join( "','" ) +"'";
        
})


</script>
<?php 
    
    

 $query=$this->db->query('select GROUP_CONCAT(booked_date) as disable from booked_dates where  doctor_id = "'. $doctor_id .'"');
 $result=$query->row();
 $result_string = "'" . str_replace(",", "','", $result->disable) . "'";


?> 
<script> 

</script>

<script>

    const image = '<?php echo base_url() ?>assets/calculator.jpg'

    
    
   
   


    
    var today = new Date();

        $("#date").datepicker({
            buttonImageOnly: true,
            buttonImage: image,
            dateFormat:'dd/m/yy',
            minDate: today,
            beforeShowDay:my_check
        });


       function my_check(in_date) {

            console.log(<?php echo $result_string ?>);
            console.log(blocked_dates);
        

                in_date = in_date.getDate() + '/'
                + (in_date.getMonth() + 1) + '/' + in_date.getFullYear();
                
                var my_array = new Array(<?php echo $result_string ?>);
                // var my_array = new Array('29/12/2021','28/12/2021','30/12/2021');
                //$('#d1').append(in_date+'<br>')
                if (my_array.indexOf(in_date) >= 0) {
                    return [false, "notav", 'Not Available'];
                } else {
                    return [true, "av", "available"];
                }
            }
            $('#date').change(function(){
    $(this).attr('value', $('#date').val());
    $("#addPatient").css("display", "inline");
    $("#patient").empty();
    window.counter=0;
})


const addButton=document.getElementById('date');
const addpatient=document.getElementById('addpatient');

console.log(addButton);
// addButton.addEventListener('change',function(){
// console.log("shibli");
// console.log(addPatient);
// addPatient.style.display="block";

// })








    // $('#date').datepicker('show');
    var counter=0;
    
    async function addPatient()
    {

            const patient=document.getElementById('patient');
            const booking_date=document.getElementById('date').value;
            console.log(booking_date);

            document.getElementById('bookNow').removeAttribute('disabled');

            const url= `<?php echo base_url().'booking/fetchDate?'?>date=${booking_date}&doc=${doctor.value}`
            // const url= "<?php echo base_url().'booking/fetchDate/'?>"+booking_date+"/"+doctor.value
        const response = await fetch(url).then(result=>result.json()).then(data=>data);
            console.log(booking_date);
            console.log(response);

            let limit = 20-response.length;

            if(limit > 4)
            {
                limit=4;
            }

            
            
            if(counter<limit){
                const htmlData=` <div style="padding:1.5rem;display:flex;justify-content:space-around;flex-wrap:wrap">
                    <div>
                        <label for="">First Name</label><br>
                        <input name="name[]" style="width:18rem;padding:1rem" type="text" required>
                    </div>
                    <div>
                    <label for="">Gender</label><br>
                        <select style="width:18rem;padding:1rem" name="gender[]" id="" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Transgender">Transgender</option>
                        </select>
                    </div>
                    <div>
                    <label for="">Age</label><br>
                        <input name="age[]" style="width:18rem;padding:1rem" type="text" required>
                    </div>
                    <div>
                    <label for="">Diseases Discription</label><br>
                        <textarea name="description[]"  id="" cols="30" rows="3" required></textarea>
                    </div>
                </div>`

                patient.insertAdjacentHTML('beforeend',htmlData);

                counter++
                
            }
        else{
        //   document.getElementById("addPatient").disabled=true;
        }
            

            // const htmlData=` <div style="padding:1.5rem;display:flex;justify-content:space-around;flex-wrap:wrap">
            //         <div>
            //             <label for="">First Name</label><br>
            //             <input name="name[]" style="width:18rem;padding:1rem" type="text" required>
            //         </div>
            //         <div>
            //         <label for="">Gender</label><br>
            //             <select style="width:18rem;padding:1rem" name="gender[]" id="" required>
            //                 <option value="Male">Male</option>
            //                 <option value="Female">Female</option>
            //                 <option value="Transgender">Transgender</option>
            //             </select>
            //         </div>
            //         <div>
            //         <label for="">Age</label><br>
            //             <input name="age[]" style="width:18rem;padding:1rem" type="text" required>
            //         </div>
            //         <div>
            //         <label for="">Diseases Discription</label><br>
            //             <textarea name="description[]"  id="" cols="30" rows="3" required></textarea>
            //         </div>
            //     </div>`

            //     patient.insertAdjacentHTML('beforeend',htmlData);
    }


    const department = document.getElementById('department');
   

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