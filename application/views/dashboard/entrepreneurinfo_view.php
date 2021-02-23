<section class="entrepreneurview-area">
	<div class="container">
		<div class="row">
	        <div class="col-lg-12">
	        	<div class="entrepreneurview-text-parent">
		            <div class="entrepreneurview-text">
		               <h2>Entrepreneur Info</h2>
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
								<th>FirstName</th>
								<th>LastName</th>
								<th>Username</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Current Address</th>
								<th>Permanent Address</th>
								<th>Age</th>
								<!-- <th>Skill</th> -->
								<th>Action</th>
							</tr>
							<?php 
								foreach ($entrepreneurdata as $ep) {
									?>
										<tr>
											<td><?php echo $ep->first_name; ?></td>
											<td><?php echo $ep->last_name; ?></td>
											<td><?php echo $ep->username; ?></td>
											<td><?php echo $ep->email; ?></td>
											<td><?php echo $ep->phone; ?></td>
											<td><?php echo $ep->current_address; ?></td>
											<td><?php echo $ep->permanent_address; ?></td>
											<td><?php echo $ep->age; ?></td>
											<!-- <td><?php echo $js->skill; ?></td> -->
											<td><a href="<?php echo base_url('dashboard/entrepreneurinfo/edit_view/'.$ep->id); ?>"class="btn btn-primary">Edit</a> <a class="btn btn-danger" href="<?php echo base_url('dashboard/entrepreneurinfo/delete/'.$ep->id); ?>">Delete</a></td>
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


