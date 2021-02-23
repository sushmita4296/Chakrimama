<section class="changepass-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="changepass-profile">
					<!-- <img src="../assets/images/profile.jpg"> -->
					<img src="../assets/upload/<?php echo $changepassdata->image ?>">
					<h2><?php echo $changepassdata->username; ?></h2>
					<p><?php echo $changepassdata->email; ?></p>
					<p>Change Provider Password</p>
				</div>
			</div>
			
			<div class="col-lg-12">
				<hr>
				<?php 
               		if ($this->session->flashdata('message')) {
               			?>
               			<div class="alert alert-success" role="alert">
               				<?php 
               					echo $this->session->flashdata('message');
               				 ?>
               			</div>

               			<?php
               		}

		         ?>
				<div class="profile-form">
					<form action="<?php echo base_url('provider_dashboard_controller/change_password_provider/validate'); ?>" method="post" >
						<div class="profile-space">
							<input type="password" name="CurrentPass"  placeholder="Current Password"><br/>
							<!-- <span class="text-danger"><?php echo form_error("CurrentPass"); ?></span> -->
						</div>
						<div class="profile-space">
							<input type="password" name="NewPass" placeholder="New Password"><br/>
							<!-- <span class="text-danger"><?php echo form_error ("NewPass"); ?></span> -->
						</div>
						<div class="profile-space">
							<input type="password" name="ConfirmPass"  placeholder="Confirm Password"><br/>
							<!-- <span class="text-danger"><?php echo form_error ("ConfirmPass"); ?></span> -->
						</div>
						<input type="submit" value="Submit"><br />
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>