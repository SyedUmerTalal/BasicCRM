
		<main>
			<form action="<?php echo base_url()."dashboard/add_user";?>" method="post">
				<div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>Add user</h2>
						</div>
					</div>
					<div class="row py-3">
						<div class="col-lg-6 label-input">
							<div>
								<label>User Name</label>
								<input type="text"  name="user_name" required>
							</div>
							<div>
								<label>User email</label>
								<input type="email"  name="user_email" required>
							</div>
							<div>
								<label>Password</label>
								<input type="password"  name="user_password" required>
							</div>
						</div>
						<div class="col-lg-6 label-input">
							<div>
								<label>Role Id</label>
								<select name = 'user_role_id' required value = >
									<option value="1">Admin</option>
									<option value="2">User </option>
								</select>
                            </div>
							<div>
								<label>Designation Id</label>
								<input type="text"  name="designation_id" required>
							</div>
							<div>
							<label>User Status</label>
								<select name = 'user_status'required value = >
									<option value="1">Active</option>
									<option value="0">InActive</option>
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
								<a href="<?php echo base_url()."manage-users"; ?>" >
								<button type= "button" style="background: #0095ff;
    color: white;
    padding: 10px 22px;
    border: none;
    border-radius: 10px;" >Back</button>
							</div>
						</div>
					</div>
					</div>
				</form>
			</div>

		</main>
