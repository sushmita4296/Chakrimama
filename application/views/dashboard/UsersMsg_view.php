<section class="usersmsgview-area">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
	        	<!-- <?php 
	        		// foreach ($msgdata->result() as $value) {
	        		foreach ($msgdata->result() as $value) {
	        			# code...
	        			echo $value->name;
	        		}
	        	 ?> -->
	        	<div class="usersmsgview-text-parent">
		            <div class="usersmsgview-text">
		               <h2>Users Message</h2>
		               <?php 
		               		if ($this->session->flashdata('success')) {
		               			?>
		               			<div class="alert alert-success" role="alert" style="text-align: center;margin-left: 26px;font-family: 'lobster';font-size: 23px;text-transform: capitalize;">
		               				<?php 
		               					echo $this->session->flashdata('success');
		               				 ?>
		               			</div>

		               			<?php
		               		}

		                ?>
		               <table class="tbl_design">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Message</th>
								<th>Action</th>
							</tr>
							<?php 
								foreach ($msgdata->result() as $md) {
									?>
										<tr>
											<td><?php echo $md->name; ?></td>
											<td><?php echo $md->email; ?></td>
											<td><?php echo $md->message; ?></td>
											<td><a class="btn btn-danger" href="<?php echo base_url('dashboard/ShowUsersMsg_controller/delete/'.$md->id); ?>">Delete</a></td>
										</tr>
									<?php
								}
							 ?>
							
						</table>
						<!-- <div class="paginationbtn"> -->
							<?php 
								echo $this->pagination->create_links();
							 ?>
						<!-- </div> -->
						
		            </div>
	        	</div>
	        </div>
	    </div>
	</div>
</section>


