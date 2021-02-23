<section class="contact-form_jbprovider pt80">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contact-header_jbprovider">
					<h3>Post</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				
				<div class="contactform-start_jbprovider">
					<form method="post" action="<?php echo base_url('entrepreneur_dashboard_controller/post_controller/post'); ?>" enctype="multipart/form-data">
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
									<input type="text" name="entrepreneur_name" placeholder="Shop|company name" required>
									<input type="Email" name="email" placeholder="Enter your email" required>
									<input type="phone" name="phone" placeholder="Enter your number" required>
									<input type="text" name="product_name" placeholder="product name demo:Shirt,Pant,Sharee etc." required>
									<input type="text" name="price" placeholder="price" required>
									<textarea class="txtarea_jbprovider"  name="product_details" placeholder="details about your product" required></textarea>
								  	 <input class="mb25" type="file" name="image" required>
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