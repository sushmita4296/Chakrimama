<section class="forget">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- <h2>Job Provider Forget Password</h2> -->
				<div class="forget-content1 mt180">
					<h3 class="mb25">New Password</h3>
					<form method="post" action="<?php echo base_url('dashboard/forgetpassword/forgetpass/update/'.$token .'/'.$email); ?>">
						<div class="forgetpass-email">
							<!-- <label for="email">Email</label> -->
							<input type="text" name="token" placeholder="Enter Your token">
							<input type="Password" name="Password" placeholder="Enter Your Password">
							<input type="Password" name="cPassword" placeholder="Confirm Password">
						</div>
						<div class="forgetpassbtn">
							<input type="submit" value="Change Password" >
						</div>
						
					</form>
					
				</div>
			</div>
		</div>
	</div>
</section>