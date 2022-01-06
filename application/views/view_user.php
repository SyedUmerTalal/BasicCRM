
		<main>
			<form action="<?php echo base_url()."dashboard/view_user";?>" method="post">
				<div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>View Users</h2>
							<br>
						</div>
					</div>
					<div class="row py-3">
						<div class="col-lg-6 label-input">
							<div>
								<label>User Name</label>
								<input type="text" disabled name="task_name" value = <?php echo $user_name;?>>
							</div>
							<div>
								<label>User Email</label>
								<input type="text" disabled name="task_description" value = "<?php echo $user_email;?>">
							</div>
							<div>
								<label>User Password</label>
								<input type="text" disabled name="address" value = <?php echo $user_password;?>>
							</div>
							<div class="col-lg-6 label-input">
							<div>
								<label>Role </label>
								<input type="text" disabled name="user_role_id" value = <?php if($user_role_id == 1) { echo 'Admin';} else {echo 'User';}?>>
                            </div>
							<div>
								<label>Designation </label>
								    <input type="text" disabled name="designation_id" value =  <?php if($designation_id == 2) { echo 'Developer';} else {echo 'Custom';}?>>
								</select>

							</div>
							<div>
							<label>User Status</label>
							<input type="text" disabled name="user_status" value = <?php if($user_status == 1) { echo 'Active';} else {echo 'InActive';}?>>
							</div>
						</div>
					</div>
						<div class="col-lg-6 label-input">
							<input type = "hidden" disabled name = "user_id" value = <?php echo $user_id;?>>
						</div>
						
					</div>
						<div class="col-lg-2">
							<div class="">
							<a href="<?php echo base_url()."manage-users"; ?>" >	<button type="button" style="    background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;" >Back</button> </a>
							</div>
						</div>
					</div>
				</form>
				<section>
			</section>
			</div>

		</main>
	