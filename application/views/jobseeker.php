<section class="jobseeker-area">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-6">
	          <div class="login-img">
	            <img src="<?php echo base_url('assets/images/login.png'); ?>">
	          </div>
			</div> -->
			<div class="col-lg-12">
				<?php 
               		if ($this->session->flashdata('message')) {
               			?>
               			<div class="alert alert-success" role="alert" style="background-color: #5352ee;color: white;margin-top: 10px;font-family: 'lobster';text-align: center;">
               				<?php 
               					echo $this->session->flashdata('message');
               				 ?>
               			</div>

               			<?php
               		}
                ?>
			<div class="col-lg-12">
				<div class="jobseeker-parent">
					<div class="jobseeker-content">
						<form method="post" action="<?php echo base_url("jbseeker_dashboard_controller/login/validation"); ?>">
							<div class="field">
								<label for="Email">Email</label>
								<input type="email" name="email" placeholder="Enter Email">
							</div>
							<div class="field">
								<label for="Password">Password</label>
								<input type="password" name="password" placeholder="Enter Password">
							</div>
							<div class="forget-pass">
								<a href="<?php echo base_url('jbseeker_dashboard_controller/forgetpassword/forgetpass'); ?>">forget password??</a>
							</div>
							<div class="field1">
								<input type="submit" value="log in">
							</div>
							<div class="jobseeker-signup">
								<!-- <button type="button"><a href="#"><span>Sign up</span></a></button> -->
								<a href="<?php echo base_url('Signup_jobseeker'); ?>">
									<button type="button">Sign Up</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>