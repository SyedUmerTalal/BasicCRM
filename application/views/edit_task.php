
		<main>
			<form action="<?php echo base_url()."dashboard/update_task";?>" method="post">
				<div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>Edit Task</h2>
						</div>
					</div>
					<div class="row py-3">
					    
						<div class="col-lg-6 label-input">
							<div>
								<label>Task Name</label>
								<input type="text" name="task_name" value = <?php echo $task_name;?>>
							</div>
							
							<div>
								<label>Short Description</label>
								<input type="text" name="task_description" value = "<?php echo $task_description;?>">
							</div>
							
							<div>
								<label>Address</label>
								<input type="text" name="address" value = <?php echo $address;?>>
							</div>
							
						</div>
						<div class="col-lg-6 label-input">
						    <div>
								<label>Time</label>
								<input type="time" name="task_time" value = <?php echo $task_time;?>>
							</div>
							
							<div>
								<label>Date</label>
								<input type="Date" name="task_date"  value = <?php echo $task_date;?>>
							</div>
							
							<div>
								<label>City</label>
								<input type="text" name="task_city_name"  value = <?php echo $task_city_name;?> >
							</div>
							
						</div>
						
						<div class="col-lg-6 label-input">
							<div>
								<label>Custom Fields Models</label>
								<input type="text" name="task_custom"  value = <?php echo $task_custom;?> >
							</div>
							
							<div>
								<label>Service</label>
								<input type="text" name="task_service"  value = <?php echo $task_service;?>>
							</div>
							
							<div>
								<label>Client Number</label>
								
								<input type="number" name="client_number"  value = <?php echo $client_number;?>>
							</div>
							<div>
							<label>Task Status</label>
								<select name = 'task_status' required value="">
								    <?php
								        $ret='';
								        foreach(["Pending","Processing","Completed"] as $result){
								            $ret.='<option '.($task_status==$result?"selected='selected'":"").' value="'.$result.'">'.$result.'</option>';
								        }
								        echo $ret;
								    ?>
								</select>
							</div>
							<div>
							<input type = "hidden" name = "task_id" value = <?php echo $task_id;?>>
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
							<div class="">
							<a href="<?php echo base_url(); ?>" >	<button type="button" style="    background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;" >Back</button> </a>
							</div>
						</div>
					</div>
				</form>
				<section>

			  			  


			  <!-- <article id="pagin" class="mt-3">
			    <div class="row">
			    	<div class="col-lg-3 col-3 m-auto"><span><a class="prev" href="#"><i class="fas fa-arrow-left"></i> PREV </a></span></div>
			      	<div class="col-lg-6 col-6 m-auto">
			      		<ul class="paginationli">
					      <li class="activepage"><a href="#">1</a></li>
					      <li><a href="#">2</a></li>
					    </ul>
			      	</div>
			      	<div class="col-lg-3 col-3 m-auto"><span><a class="next" href="#"> NEXT <i class="fas fa-arrow-right"></i></a></span></div>
			    </div>
			  </article> -->

			</section>
			</div>

		</main>
		