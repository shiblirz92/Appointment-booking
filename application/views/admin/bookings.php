
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex mb-3 mb-md-4 align-items-start">
					<div class="mr-auto d-lg-block">
						<a href="doctor-detail.html" class="btn btn-primary btn-rounded">+ Add New</a>
					</div>
					<div class="input-group search-area ml-auto d-inline-flex mr-2">
						
					</div>
				
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table id="example5" class="table shadow-hover  table-bordered mb-4 dataTablesCard fs-14">
								<thead>
									<tr>
										<th>
											Sl.No
										</th>
										<th>Name</th>
										<th>Age</th>
										<th>Gender</th>
										<th>Description</th>
										 <th>Doctor</th>
										<th>Booked On</th>
										<!--<th>Status</th> -->
									</tr>
								</thead>
								<tbody>
									
								<?php foreach($data as $key=>$value) { ?>
									
									<tr>
										<td>
											<?php echo $key+1; ?>
										</td>
										<td><?php echo $value->patient_name; ?></td>
										<td><?php echo $value->age; ?></td>
										<td><?php echo $value->gender; ?></td>
										<td><?php echo $value->description; ?></td>
										<?php 
										$this->db->where('id',$value->doctor_id);
										$query=$this->db->get('doctors');
									$result =$query->row(); ?>
										<td><?php echo $result->name ?></td>
										<td><?php echo $value->added_on; ?></td>

										
										
										<!-- <td>
											<a href="#" class="btn btn-primary light btn-rounded btn-sm" >5 Appointment</a>
										</td> -->
										<!-- <td><span class="font-w500">+12 4124 5125</span></td> -->
										
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   
	
	<script>
		(function($) {
		 
			var table = $('#example5').DataTable({
				searching: false,
				paging:true,
				select: false,
				//info: false,         
				lengthChange:false 
				
			});
			$('#example tbody').on('click', 'tr', function () {
				var data = table.row( this ).data();
				
			});
		   
		})(jQuery);
	</script>
	
