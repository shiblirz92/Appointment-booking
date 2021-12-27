<div class="content-page">
        <div class="container-fluid container">
         
            <div class="col-lg-12">
               <div class="card card-block card-stretch card-height blog">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Total Patients Left <span id="total_patient"></span></h4>
                     </div>
                  </div>
                  <div class="card-body">
                     <ul class="row align-items-center list-inline p-0 mb-0" id="list">
                        
                       
                       
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        </div>
      </div>

      <script>
        //   const department = document.getElementById('department');
        //   const doctor = document.getElementById('doctor');
          const list = document.getElementById('list');
          const total_patient = document.getElementById('total_patient');
   

//    department.addEventListener('change',async function(){


//        var i;
//        for(i=doctor.length-1;i>=1;i--)
//        {
//            doctor.remove(i);
//        }

//        console.log(doctor.length);
//        console.log(department.value);
//        const url= "<?php echo base_url().'booking/fetchDoctor/'?>"+department.value;
//        const response = await fetch(url).then(result=>result.json()).then(data=>data);
//        console.log(response);

//        response.map((result)=>{

//            const html=`<option value="${result.id}">${result.name}</option>`
//            doctor.insertAdjacentHTML('beforeend',html)

//        })
       
//    })

setTimeout(function(){
   window.location.reload(1);
}, 5000);

// setTimeout(function(){
//    window.location.reload(1);
// }, 5000);

// setTimeout(function(){
//    $('#list').load(document.URL +  ' #list');
// }, 5000);



window.addEventListener('load',async function(){

    $("#list").empty();
const url= "<?php echo base_url().'booking/fetchLiveBookings/'?>"+<?php echo $doctor ?>;
const response = await fetch(url).then(result=>result.json()).then(data=>data);
console.log(response);

const total_length=response.length;

total_patient.innerHTML=total_length;
let user = "<?php echo $this->session->userdata('user_id') ?>"
let warning =""
response.map((result)=>{


   if(result.user_id===user)
   {
      user="bg-success"
      if(result.status==4){
         user="bg-danger"
      warning="You Are On Hold"
   }
   }
   else if(result.status==4){
         user="bg-warning"
      warning="Patient On Hold"
   }
   else
   {
      user="bg-primary";
   }

   
   



    const html=`<li  class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-lg-0">
                           <div  class="p-3 border text-center ${user}  text-white pricing-radius-box"> <span class="font-size-16 text-uppercase">Basic</span>
                              <h2 class="mb-2   text-white">${result.patient_name}<small class="font-size-14"></small></h2> <br>   
                              <strong>${warning}</strong>
                               
                           </div>
                        </li>`
    list.insertAdjacentHTML('beforeend',html)

})

})
      </script>