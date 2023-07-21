<div class="container">
	<div class="modal fade bd-example-modal-xl" data-backdrop="static" id="userAdd" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="button-24 close_openCreateUserModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
					<div class="row">
						<div class="col-xl-6 mx-auto">
							<div class="card">
								<div class="card-header px-4 py-3">
									<h5 class="mb-0">Add User</h5>
								</div>
								<div class="card-body p-4">
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Enter first Name</label>
										<input type="text" name="first_name" class="form-control"
										value="{{ old('first_name') }}"id="fname" placeholder="Enter firstName"required>
									</div>
									<br>
									<div class="col-md-6">
										<label for="bsValidation13" class="form-label">Enter last Name</label>
										<input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}"id="lname" placeholder="Enter lastName"required>
									</div>
									<br>
									<div class="col-md-6">
										<label  class="form-label">Enter user Email</label>
										<input type="email" name="user_email" class="form-control"	value="{{ old('user_email') }}"id="uemail" placeholder="Enter userEmail"required>
									</div>
									<br>
									<div class="col-md-6">
										<label  class="form-label">Enter user Password</label>
										<input type="password" name="user_password" class="form-control"
										value="{{ old('user_password') }}"id="upassword"
										placeholder="Enter userPassword"required>
									</div>
									<br>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="user_country" class="form-select" onchange="getAddress(this.value,'country')" value="1" required>
										</select>
									</div>
									<br>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">State</label>
										<select id="userState" class="form-select" onchange="getAddress(this.value,'state')" value="2"  required>
										</select>
									</div>
									<br>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">District</label>
										<select id="userDistrict"
											class="form-select" onchange="getAddress(this.value,'district')"   required>
										</select>
									</div>
									<br>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">City</label>
										<select id="userCity" class="form-select" required>
										</select>
									</div>
									<br>
									<div class="col-md-6">
										<label class="form-label">Enter pinCode</label>
										<input type="text" name="pin_code" class="form-control"	value="{{ old('pin_code') }}"id="upincode" placeholder="Enter pinCode"required>
									</div>
									<br>
									<button type="button" class="btn btn-primary px-4"	id="storeUser">Submit</button>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="button-57_alt button-58_alt close_openCreateUserModal"data-dismiss="modal">Close</button>
				</div>
            </div>
        </div>
    </div>
</div>






