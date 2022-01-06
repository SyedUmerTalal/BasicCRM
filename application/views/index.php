		 <?php $user_role_id = $this->session->userdata('user_role_id'); ?>
		<main>
		   
		    <?php
		            
				if($user_role_id == 1){ ?>
		    
		    <div class="create-task container  ">						
                 <a href="<?php echo base_url().'create-task'; ?>" >  <button class="my-3" >Create Task</button> </a>
            </div>
            <?php } ?>
                            
			<div class="container task-list">
				<div class="row">
					<div class="col-lg-6 text-left">
						<h2>Task List</h2>
						
						<br>
						<br>
					</div>
					<div class="col-lg-6">
						
					</div>
				</div>
				<section>

			  <div class="content">
			  <table class="table mt-5" id="table_id">
			      <thead>
  			      <tr>
			        <th>S.No.</th>
			        <th>To Engage with</th>
			        <th>Description</th>
			        <th>Date</th>
			        <th>Time</th>
			        <th>Status</th>
			        <th>Actions</th>
			      </tr>
			      </thead>
			    <tbody >
			     <?php if($user_role_id == 1): ?>
			        <?php $task_query = $this->db->query("Select * from task"); ?>
			     <?php else: ?>
			        <?php $task_query = $this->db->query("Select t.* from task t , user u where u.user_Id = t.assign_to"); ?>
			     <?php endif; ?>
			      
			      <?php $i = 1;?>
			      <?php foreach ($task_query->result_array() as $row):?>
			        <tr>
				    <?php $id  = $row['task_id']; ?>
    					<td><?php echo $i++; ?></td>
    					<td><?php echo $row['task_name']; ?></td>
    					<td><?php echo $row['task_description']; ?></td>
    					<td><?php echo $row['task_date']; ?></td>
    					<td><?php echo $row['task_time']; ?></td>
    					
    					    <?php
    					        $ret ='<td><select id="'.$id.'" class="selectStatus" required>
    					            <option value="Select Status">Select Status</option>';
    					            foreach(['Pending','Processing','Completed'] as $val){
    					               $ret .='<option '.($row['task_status']===$val?"selected='selected'":"").' value="'.$val.'">'.$val.'</option>'; 
    					            }
    					            $ret.='</td>';
    					            echo $ret;
    					    ?>
			    	<td>
						<a href="<?php echo base_url()."view-task/$id"?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
			    		 <?php
				            if($user_role_id == 1){ ?>
        			    		<a href="<?php echo base_url()."edit-task/$id"?>"><i class="fas fa-edit"></i></a>
        			        	<a href="<?php echo base_url()."delete-task/$id"?>"><i class="fas fa-trash-alt"></i></a>
    			        	<?php 
            			}
            		    ?>
			    	</td>
			      </tr>
			      <?php endforeach; ?>
			    </tbody>
			  </table>

			  </div>

			</section>
			</div>
            

		</main>
		