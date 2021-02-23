<section class="admin-profile-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="admin-profile">
					<img src="../assets/images/profile.jpg">
					<h2><?php echo $admindata->username; ?></h2>
					<p><?php echo $admindata->email; ?></p>
				</div>
			</div>
			
			<div class="col-lg-12">
				<hr>
				<?php 
           		if ($this->session->flashdata('success')) {
           			?>
           			<div class="alert alert-success" role="alert">
           				<?php 
           					echo $this->session->flashdata('success');
           				 ?>
           			</div>

           			<?php
           		}

            ?>
				<div class="profile-edit">
					<form action="<?php echo base_url('dashboard/AdminProfile_controller/update/'.$admindata->id); ?>" method="post">
			            <div class="row">
			              <div class="col-lg-6">
			                <div class="single-info">
			                  <label for="UserName">Name</label>
			                   <input class="mb25" type="text" name="username" value="<?php echo $admindata->username; ?>" >
			                </div>
			              </div>
			              <div class="col-lg-6">
			                <div class="single-info">
			                  <label for="Address">Address</label>
			                  <input class="mb25" type="text" name="address" value="<?php echo $admindata->address; ?>" >
			                </div>
			              </div>
			              
			               <div class="col-lg-6">
			                <div class="single-info">
			                  <label for="Email">Email</label>
			                  <input class="mb25" type="Email" name="email" value="<?php echo $admindata->email; ?>"  >
			                </div>
			              </div>
			              <div class="col-lg-6">
			                <div class="single-info">
			                  <label for="Phone">Phone</label>
			                  <input class="mb25" maxlength="11" type="text" name="phone" value="<?php echo $admindata->phone; ?>" >
			                </div>
			              </div>
			            </div>
			            <div class="row">
			              <div class="col-lg-12">
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