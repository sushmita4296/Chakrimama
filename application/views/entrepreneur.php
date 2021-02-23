<section class="entrepreneur-area">
	<div class="container">
		<div class="row">
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
				<div class="entrepreneur-parent">
					<div class="entrepreneur-content">
						<form method="post" action="<?php echo base_url("entrepreneur_dashboard_controller/login/validation"); ?>">
							<div class="field">
								<label for="Email">Email</label>
								<input type="email" name="email" placeholder="Enter Your Emaill">
							</div>
							<div class="field">
								<label for="Password">Password</label>
								<input type="password" name="password" placeholder="Enter Your Password">
							</div>
							<div class="forget-pass">
								<a href="<?php echo base_url('entrepreneur_dashboard_controller/forgetpassword/forgetpass'); ?>">forget password??</a>
							</div>
							<div class="field1">
								<input type="submit" value="log in">
							</div>
							<div class="entrepreneur-signup">
								<a href="<?php echo base_url('Signup_entrepreneur'); ?>"><button type="button">Sign Up</button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>