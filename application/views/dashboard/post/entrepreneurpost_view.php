
<section class="timeline1">
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
				<div class="row">
					<div class="col-lg-6">
						<div class="card1">
							<div class="cardpadding">
								<img src="../../assets/img_entrepre/<?php echo $pd->image ?>">
							</div>
							
						</div>
					</div>
					<div class="col-lg-6">
						<div class="timeline-content1">
							<h2><?php echo $pd->entrepreneur_name; ?></h2>
							<p>Product:<?php echo $pd->product_name ?></p>
							<p>Details:<?php echo $pd->product_details; ?></p>
							<p>Price:<?php echo $pd->price ?></p>
							<p>Email:<?php echo $pd->email; ?></p>
							<p>Phone:<?php echo $pd->phone; ?></p>
							<p>Online shopping has become a major disruptor in the retail industry[3] as consumers can now search for product information and place product orders across different regions.</p>
							<!-- <p>Deadline::<?php echo $pd->deadline; ?></p> -->
							 <a class="btn btn-danger" href="<?php echo base_url('dashboard/entrepreneurpost/delete/delete/'.$pd->id); ?>">Delete Post</a>
						</div>
					</div>
				</div>
					
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>



