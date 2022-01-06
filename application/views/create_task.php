<?php
    // echo "<pre>";
    // print_r($users); exit;
?>
		<main>
			<form action="<?php echo base_url().'dashboard/insert_task';?>" method="post">
			    
			    <div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>Assign Task</h2>
						</div>
					</div>
					
					
					<div class="row py-3">
						<div class="col-lg-6 label-input">
							<div>
								<label>Task Name</label>
								<input type="text" name="task_name" required>
							</div>
							<div>
								<label>Short Description</label>
								<input type="text" name="task_description" required>
							</div>
							<div>
								<label>Address</label>
								<input type="text" name="address" required>
							</div>
							<div>
								<label>Time</label>
								<input type="time" name="task_time" required>
							</div>
							<div>
								<label>Date</label>
								<input type="Date" name="task_date" required>
							</div>
							<div>
								<label>City</label>
								<input type="text" name="task_city_name" required >
							</div>
						</div>
						<div class="col-lg-6 label-input">
							<div>
								<label>Custom Fields Models</label>
								<input type="text" name="task_custom" required>
							</div>
							<div>
								<label>Service</label>
								<input type="text" name="task_service" required>
							</div>
							<div>
								<label>Client Number</label>
								
								<input type="number" name="client_number" required>
							</div>
							<div class="combobox">
							    <!--<?php echo $users ?>-->
								<label>Users</label>
								<select class="form-control" name="user_id" id="user_id">
								    
								<?php foreach($users as $user):?>
								<option  value="<?php echo $user['user_id']; ?>">
										<?php echo $user['user_name']; ?></option>
								<?php endforeach;?>					
							</select>
							</div>
							<div>
							<label>Task Status</label>
								<select name = 'task_status' required value = >
									<option value="Pending">Pending</option>
									<option value="Processing">Processing</option>
									<option value="Completed">Completed</option>
								</select>
							</div>
						</div>
					</div>
					
					
					<div class="row">
						<div class="col-lg-2 ml-auto">
							<div class="assign-btn  ">
								<input type="submit" style="    background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;">
							</div>
						</div>
						<div class="col-lg-2">
							<div class="reset-btn  ">
								<a href="<?php echo base_url(); ?>" >
								<button type = "button"  style="background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;" >Back</button>
							</div>
						</div>
					</div>
					
					
					
			    </div>
			    
			    
			    </form>
		</main>