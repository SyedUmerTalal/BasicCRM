<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title> DashBoard </title>
  <link rel="icon" href="assets/logo.png" type ="image/x-icon">
  
  <!-- fullCalendar -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.css" rel="stylesheet" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."links/fontawesome/css/all.css";?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()."links/fontawesome/css/style.css";?>">
  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <!--///toastr-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <?php $user_role_id = $this->session->userdata('user_role_id'); ?>
</head>

<body>

	<input type="checkbox" id="sidebar-toggle">
	<div class="sidebar">
		    
		<label for="sidebar-toggle" class="w-100 text-center" style="height: 60px;cursor: pointer;">
        	<span for="sidebar-toggle" class="fas fa-long-arrow-alt-left fa-fw"></span>
			<span></span>
		</label>
				
		<div class="sidebar-header">
			<div class="logo">
				<h4>LH</h4>
			</div>
		</div>
		<hr style="border:1px solid #2f2f43">
		<div class="sidebar-menu">
		   <ul>


		      <a href="<?php echo base_url(); ?>">
		          <li class="active">
		            <span><img width="25px" src="<?php echo base_url(); ?>assets/tasklist2.png"></span>
		            <span>Task List</span>
		         </li>
		         <a>
		         
		         
		         
		         
		            <?php
		            
				if($user_role_id == 1){ ?>
				    
				    
		      <a href="<?php echo base_url().'create-task'; ?>">
		         <li> 
					<span><img width="32px" src="<?php echo base_url(); ?>assets/assigntask2.png"></span>
		            <span>Create Task</span>
		         </li>
                </a>
		      <a  href="<?php echo base_url().'manage-users'; ?>">
		         <li> 
					<span><img width="32px" src="<?php echo base_url(); ?>assets/assigntask2.png"></span>
		            <span>Manage Users</span>
		         </li>
                </a>
                
                
				<?php } ?>
				
				
                
                
                
		   </ul>
		</div>
		
	</div>

	<div class="main-content">

		<header class="centering">
			<div class="searchwrapper">
				<ul>
					<li>
						<h3>DASHBOARD</h3>
					</li>
				</ul>
			</div>

			<div class="social-icons">
				<div class="image-container">
					<div class="image mt-4">
					<a href="<?php echo base_url()."logout"; ?>"> Logout </a>

					</div>
				</div>
			</div>

		</header>