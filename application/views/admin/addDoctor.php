<div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add Doctor</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?= base_url() ?>admin/doctor/form_validation" id="step-form-horizontal" class="step-form-horizontal">
                                    <div>
                                        <h4> </h4>
                                        <section>
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Name*</label>
                                                        <input type="text" name="name" class="form-control" placeholder=" " required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Speciality*</label>
                                                        <select type="text" name="Speciality" class="form-control" placeholder="Montana" required>
                                                        <?php foreach($specialization as $value) { ?>
                            <option value="<?php echo $value->id ?>"><?php echo $value->specialization ?></option>
                            <?php } ?>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Email Address*</label>
                                                        <input type="email" class="form-control" name= "email" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Password*</label>
                                                        <input type="text" name="password" class="form-control" placeholder="password" required>
                                                    </div>
                                                    </div>
                                                 <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Phone Number*</label>
                                                        <input type="text" name="phoneNumber" class="form-control" placeholder="" required>
                                                   
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-3">
                                                    <div class="form-group">
                                                        <label class="text-label">Where are you from*</label>
                                                        <input type="text" name="place" class="form-control" required>
                                                   
                                                    </div>
                                                </div>
                                         
                                        <section>
                                        <button type="submit" name= "save" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>