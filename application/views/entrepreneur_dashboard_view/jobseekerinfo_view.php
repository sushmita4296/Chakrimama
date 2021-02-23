<section class="jobseekerview-area">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
	        	<div class="jobseekerview-text-parent">
		            <div class="jobseekerview-text">
		               <h2>Job Seeker Info</h2>
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
		               <table class="tbl_design">
							<tr>
								<th>FirstName</th>
								<th>LastName</th>
								<th>Username</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Current Address</th>
								<th>Permanent Address</th>
								<th>Age</th>
								<th>Skill</th>
								<!-- <th>Action</th> -->
							</tr>
							<?php 
								foreach ($jobseekerdata as $js) {
									?>
										<tr>
											<td><?php echo $js->first_name; ?></td>
											<td><?php echo $js->last_name; ?></td>
											<td><?php echo $js->username; ?></td>
											<td><?php echo $js->email; ?></td>
											<td><?php echo $js->phone; ?></td>
											<td><?php echo $js->current_address; ?></td>
											<td><?php echo $js->permanent_address; ?></td>
											<td><?php echo $js->age; ?></td>
											<td><?php echo $js->skill; ?></td>
											
										</tr>
									<?php
								}
							 ?>
							
						</table>
		            </div>
	        	</div>
	        </div>
	    </div>
	</div>
</section>


