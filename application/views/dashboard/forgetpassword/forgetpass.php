<section class="forget">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2>Job Provider Forget Password</h2> -->
				<div class="forget-content mt180">
					<h3 class="mb25">Reset Password</h3>
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
					<form method="post" action="<?php echo base_url('dashboard/forgetpassword/forgetpass/reset'); ?>">
						<div class="forgetpass-email">
							<!-- <label for="email">Email</label> -->
							<input type="email" name="email" placeholder="Enter Your Email">
						</div>
						<div class="forgetpassbtn">
							<input type="submit" value="Send Reset link" >
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</section>