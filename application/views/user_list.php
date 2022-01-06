

		<main>
		    <div class="create-task container ">						
                 <a href="<?php echo base_url().'create-user'; ?>" >  <button class="mt-3" >Create User</button> </a>
            </div>
                            
			<div class="container task-list">
				<div class="row">
					<div class="col-lg-6 text-left">
						<h2>Users List</h2>
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
			        <th>Name</th>
			        <th>Email</th>
			        <th>Created Date</th>
			        <th>Actions</th>
			      </tr>
			      <?php 
				 	$task_query = $this->db->query("SELECT * FROM user");
				  ?>
				</thead>
				<tbody>
				    <?php $i = 1;?>
				    <?php foreach ($task_query->result_array() as $row): ?>
				        <?php $id  = $row['user_id']; ?>
				            <?php if($id != "1"): ?>
				                <tr>
				                 <td><?= $i++ ?></td>
    							 <td><?= $row['user_name'] ?></td>
    							 <td><?= $row['user_email'] ?></td>
    							 <td><?= $row['user_activity_at'] ?></td>
    							 <td>
            						<a href="<?php echo base_url()."view-user/$id"?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
            			    		<a href="<?php echo base_url()."edit-user/$id"?>"><i class="fas fa-edit"></i></a>
            			        	<a href="<?php echo base_url()."delete-user/$id"?>"><i class="fas fa-trash-alt"></i></a>
            			    	</td>
    							</tr>
    							
				            <?php endif; ?>
				    <?php endforeach; ?>
			    </tbody>
			  </table>
			  </div>
		</main>
		