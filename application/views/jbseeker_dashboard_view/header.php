<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChakriMama</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/all.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css');?>">
</head>
<body>
    <header class="top_header_seeker">
    	<div class="container">
    		<div class="row">
	    		<div class="col-lg-2">
					<div class="top_logo_seeker">
						 <a href="<?php echo base_url('Home/homepage');?>">ChakriMama</a>
					</div>
	    		</div>
	    		<div class="col-lg-10">
					<nav>
						<div class="top_menu_seeker">
							<ul>
								<li>
									<a href="#">Setting<i class="fas fa-chevron-down space_seeker"></i></a>
			                         <ul class="top_dropmenu ">
			                            <li><a href="<?php echo base_url('jbseeker_dashboard_controller/jobseeker_profile_controller'); ?>"><i class="fas fa-user-alt"></i>Edit Profile</a></li>
			                            <li><a href="<?php echo base_url('jbseeker_dashboard_controller/change_password_seeker'); ?>"><i class="fas fa-cog"></i>Change Password</a></li>
			                            <li><a href="<?php echo base_url('jbseeker_dashboard_controller/jbseeker_dashboard/logout'); ?>"><i class="fas fa-power-off"></i>Logout</a></li>
			                         </ul>
								</li>
							</ul>
						</div>
					</nav>
	    		</div>	
    		</div>
    	</div>
    </header>
</body>
</html>