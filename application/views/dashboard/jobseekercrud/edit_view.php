<section class="edit_view-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
		        <div class="edit_view-area-form">
		        	<form action="<?php echo base_url('dashboard/jobseekerinfo/update/'.$jobseekerdata->id); ?>" method="post">
			            <div class="row">
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label  for="FirstName">First Name</label>
			                  <input class="mb25" type="text" name="first_name" value="<?php echo $jobseekerdata->first_name; ?>" >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="LastName">Last Name</label>
			                  <input class="mb25" type="text" name="last_name" value="<?php echo $jobseekerdata->last_name; ?>" >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="UserName">User Name</label>
			                   <input class="mb25" type="text" name="username" value="<?php echo $jobseekerdata->username; ?>" >
			                </div>
			              </div>
			               <div class="col-md-6">
			                <div class="single-info">
			                  <label for="Email">Email</label>
			                  <input class="mb25" type="Email" name="email" value="<?php echo $jobseekerdata->email; ?>"  >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="Phone">Phone</label>
			                  <input class="mb25" maxlength="11" type="text" name="phone" value="<?php echo $jobseekerdata->phone; ?>" >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="Age">Age</label>
			                   <input class="mb25" type="age" name="age" value="<?php echo $jobseekerdata->age; ?>" >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="Currentaddress">Current Address</label>
			                   <input class="mb25" type="text" name="current_address" value="<?php echo $jobseekerdata->current_address; ?>"  >
			                </div>
			              </div>
			              <div class="col-md-6">
			                <div class="single-info">
			                  <label for="Permanentaddress">Permanent Address</label>
			                   <input class="mb25" type="text" name="permanent_address" value="<?php echo $jobseekerdata->permanent_address; ?>" >
			                </div>
			              </div>
			              <div class="col-md-6">
				          	<div class="single-info">
			                	<label for="skill">Skill</label>
			                    <input class="mb25" type="text" name="skill"  value="<?php echo $jobseekerdata->skill; ?>" >
				                </div>
			            	</div>
			            	<div class="col-md-6">
				          	<div class="single-info">
			                	<label for="Available">Available</label>
			                    <input class="mb25" type="text" name="available"  value="<?php echo $jobseekerdata->available; ?>" >
				                </div>
			            	</div>
			            </div>
			            <div class="row">
			              <div class="col-md-12">
			                  <div class="button-design">
			                     <!-- <button type="button" class="cancelbtn">Cancel</button> -->
			                     <input type="submit" value="Update">
			                  </div>
			                </div>
			            </div>
	          		</form>
        		</div>
        	</div>
		</div>
	</div>
</section>