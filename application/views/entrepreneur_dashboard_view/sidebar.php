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
    <header class="dashboard_header_entrepreneur">
		<nav>
			<div class="dashboard_menu_entrepreneur">
				<ul>
          <li><a href="<?php echo base_url('entrepreneur_dashboard_controller/entrepreneur_dashboard'); ?>">dashboard</a></li>
          <li><a href="<?php echo base_url('entrepreneur_dashboard_controller/post_controller/entrepreneur_post_controller'); ?>">post</a></li>
          <li><a href="<?php echo base_url('entrepreneur_dashboard_controller/post/postview_controller');?>">available job</a></li>
					<!-- <li>
						<a href="#" onclick="myFunction()">Users<i class="fas fa-chevron-down space_provider"></i></a>
                         <ul class="dashboard_submenu_entrepreneur " id="myDropdown">
                            <li><a href="<?php echo base_url('dashboard/ShowUsersMsg_controller'); ?>">Message</a></li>
                         </ul>
					</li> -->
					<li><a href="<?php echo base_url('entrepreneur_dashboard_controller/jobseekerinfo'); ?>">Job_seeker info</a></li>
					<li><a href="<?php echo base_url('entrepreneur_dashboard_controller/jobproviderinfo'); ?>">JOb provider info</a></li>
					<li><a href="<?php echo base_url('entrepreneur_dashboard_controller/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo base_url('entrepreneur_dashboard_controller/About'); ?>">about</a></li>
          <li><a href="<?php echo base_url('entrepreneur_dashboard_controller/own_post_controller/view_own_post'); ?>">own post</a></li>
					
				</ul>
			</div>
		</nav>
    </header>

    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

</script>
</body>
</html>