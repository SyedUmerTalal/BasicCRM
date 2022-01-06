
		<main>
			<form action="<?php echo base_url()."dashboard/update_user";?>" method="post">
				<div class="container my-5 task-list">
					<div class="row pb-2 border-bottom">
						<div class="col-lg-6 text-left mr-auto">
							<h2>Edit User</h2>
						</div>
					</div>
					<div class="row py-3">
					    
						<div class="col-lg-6 label-input">
							<div>
								<label>User Name</label>
								<input type="text" name="user_name" value = <?php echo $user_name;?>>
							</div>
							<div>
								<label>User Email</label>
								<input type="text" name="user_email" value = "<?php echo $user_email;?>">
							</div>
							<div>
								<label>User Password</label>
								<input type="text" name="user_password" value = <?php echo $user_password;?>>
							</div>
						</div>
						<div>
							<input type = "hidden" name = "user_id" value = <?php echo $user_id;?>>
						</div>
						<div class="col-lg-6 label-input">
							<div>
								<label>Role </label>
								<select name = 'user_role_id' required value = >
								    <option value="2">User </option>
								    <option value="1">Admin</option>
									
								</select>
                            </div>
							<div>
								<label>Designation </label>
								<select name = 'designation_id' required value = >
									<option value="1">Custom</option>
									<option value="2">developer</option>
								</select>

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
		