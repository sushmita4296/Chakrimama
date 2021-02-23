<section class="admin-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php 
	               		if ($this->session->flashdata('message')) {
	               			?>
	               			<div class="alert alert-success" role="alert" style="margin-top: 10px;text-align: center;font-family: 'lobster';background-color: #c1bde6;color: black;border: none;font-size: 20px;padding: 8px;">
	               				<?php 
	               					echo $this->session->flashdata('message');
	               				 ?>
	               			</div>

	               			<?php
	               		}
	                ?>
				<div class="admin-parent">
					<div class="admin-content">
						<form action="<?php echo base_url('dashboard/Login/login'); ?>" method="post">
							<div class="field">
								<label for="Username">Username</label>
								<input type="text" name="username" placeholder="Enter Username" required>
							</div>
							<div class="field">
								<label for="Password">Password</label>
								<input type="password" name="password" placeholder="Enter Password" required>
							</div>
							<div class="forget-pass">
								<a href="<?php echo base_url('dashboard/forgetpassword/forgetpass'); ?>">forget password??</a>
							</div>
							<div class="field1">
								<input type="submit" value="log in">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>