
		<main>
			<form action="<?php echo base_url()."index.php/tasks/view_task";?>" method="post">
				<div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>View Task</h2>
						</div>
					</div>
					<div class="row py-3">
						<div class="col-lg-6 label-input">
							<div>
								<label>Task Name</label>
								<input type="text" disabled name="task_name" value = <?php echo $task_name;?>>
							</div>
							<div>
								<label>Short Description</label>
								<input type="text" disabled name="task_description" value = "<?php echo $task_description;?>">
							</div>
							<div>
								<label>Address</label>
								<input type="text" disabled name="address" value = <?php echo $address;?>>
							</div>
						    <div>
								<label>Time</label>
								<input type="text" disabled name="task_time" value = <?php echo $task_time;?>>
							</div>
							<div>
								<label>Date</label>
								<input type="text" disabled name="task_date" value = <?php echo $task_date;?> >
							</div>
							<div>
								<label>City</label>
								<input type="text" disabled name="task_city_name" value = <?php echo $task_city_name;?> >
							</div>
						</div>
						<div class="col-lg-6 label-input">
							<div>
								<label>Custom Fields Models</label>
								<input type="text" disabled name="task_custom" value = <?php echo $task_custom;?>>
							</div>
							<div>
								<label>Service</label>
								<input type="text" disabled name="task_service" value = <?php echo $task_service;?>>
							</div>
							<div>
								<label>Task Status</label>
								<input type="text" disabled name="task_service" value = <?php echo $task_status;?>>
							</div>
    						<div>
    							<input type = "hidden" disabled name = "task_id" value = <?php echo $task_id;?>>
    						</div>
    						<div class="col-lg-2">
							<div class="">
							<a href="<?php echo base_url(); ?>" >	<button type="button" style="    background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;" >Back</button> </a>
							</div>
						</div>
				</form>
		</main>
	