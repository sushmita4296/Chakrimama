<section class="jobproviderview-area">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
	        	<div class="jobproviderview-text-parent">
		            <div class="jobproviderview-text">
		               <h2>Job Provider Info</h2>
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
								<!-- <th>Skill</th> -->
								<!-- <th>Action</th> -->
							</tr>
							<?php 
								foreach ($jobproviderdata as $jp) {
									?>
										<tr>
											<td><?php echo $jp->first_name; ?></td>
											<td><?php echo $jp->last_name; ?></td>
											<td><?php echo $jp->username; ?></td>
											<td><?php echo $jp->email; ?></td>
											<td><?php echo $jp->phone; ?></td>
											<td><?php echo $jp->current_address; ?></td>
											<td><?php echo $jp->permanent_address; ?></td>
											<td><?php echo $jp->age; ?></td>
											<!-- <td><?php echo $js->skill; ?></td> -->
											
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


