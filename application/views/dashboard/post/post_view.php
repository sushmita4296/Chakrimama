
<!-- <?php 
	foreach ($postdata as $pd) {
		?>
		<section class="timeline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="timeline-content">
							<div class="card">
								<h2>Need <?php echo $pd->job_position; ?></h2>
								<p>Provider:<?php echo $pd->provider_name ?></p>
								<p>Email:<?php echo $pd->email; ?></p>
								<p>Phone:<?php echo $pd->phone; ?></p>
								<p>Requirement:<?php echo $pd->requirement; ?></p>
								<p>Deadline::<?php echo $pd->deadline; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
			
		<?php
	}
 ?> -->


  <section class="timeline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
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

				<?php 
				foreach ($postdata as $pd) {
				?>
					<div class="timeline-content">
						<div class="card jobpostdeletebtn">
							<h2>Need <?php echo $pd->job_position; ?></h2>
							<h5 style="color:tomato;">Available : <?php echo $pd->available; ?></h5>
							<p>Provider:<?php echo $pd->provider_name ?></p>
							<p>Email:<?php echo $pd->email; ?></p>
							<p>Phone:<?php echo $pd->phone; ?></p>
							<p>Requirement:<?php echo $pd->requirement; ?></p>
							<p>Deadline::<?php echo $pd->deadline; ?></p>
							 <a class="btn btn-danger" href="<?php echo base_url('dashboard/post/delete/delete/'.$pd->id); ?>">Delete Post</a>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>




<!-- <section class="jobproviderview-area">
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
								<th>provider_name</th>
								
							</tr>
							<?php 
								foreach ($postdata as $jp) {
									?>
										<tr>
											<td><?php echo $jp->provider_name; ?></td>
											>
											
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
 -->

