<!--  <section class="timeline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php 
				foreach ($postdata as $pd) {
				?>
					<div class="timeline-content">
						<div class="card">
							<img src="../../assets/img_entrepre/<?php echo $pd->image ?>">
							<h2><?php echo $pd->entrepreneur_name; ?></h2>
							<p>price:<?php echo $pd->price ?></p>
							<p>Email:<?php echo $pd->email; ?></p>
							<p>Phone:<?php echo $pd->phone; ?></p>
							<p>product_details:<?php echo $pd->product_details; ?></p>
							
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section> -->


<section class="timeline1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
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
							<p>Online shopping has become a major disruptor in the retail industry[3] as consumers can now search for product information and place product orders across different regions. Online retailers deliver their products directly to the consumers' home, offices or wherever they want.</p>
							<!-- <p>Deadline::<?php echo $pd->deadline; ?></p> -->
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



