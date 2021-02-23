<section class="contact-form_jbprovider pt80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contact-header_jbprovider">
					<h3>Post a Job</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				
				<div class="contactform-start_jbprovider">
					<form method="post" action="<?php echo base_url('provider_dashboard_controller/post_controller/post'); ?>">
						<!-- <div class="row">
							<div class="col-lg-12"> -->
								<div class="contact-info_jbprovider">
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
									<input type="text" name="provider_name" placeholder="provider|company name" required>
									<input type="Email" name="email" placeholder="Enter your email" required>
									<input type="phone" name="phone" placeholder="Enter your number" required>
									<input type="text" name="job_position" placeholder="job position demo:Teacher,Doctor" required>
									<input type="text" name="deadline" placeholder="deadline demo:11th dec 2020" required>
									<input type="text" name="available" placeholder="Available Yes|No" required>
									<textarea class="txtarea_jbprovider"  name="requirement" placeholder="requirement" required></textarea>
									<!-- <input class="txtarea" type="textarea" name="message" placeholder="Message"> -->
									<div class="cntbtn_jbprovider">
										<input  type="submit" value="Post">
									</div>
									
								</div>
						<!-- 	</div>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</section>