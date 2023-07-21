<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateUserModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">User</h5>
                    <button type="button" class="button-24 close_openUpdateUserModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
					<div class="row">
						<div class="col-xl-6 mx-auto">
							<div class="card">
								<div class="card-header px-4 py-3">
									<h5 class="mb-0">Update User</h5>
								</div>
								<div class="card-body p-4">
									<div class="col-md-6">
										<input type="hidden" id="cuser_id">
										<label for="bsValidation2" class="form-label">Enter first Name</label>
										<input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}"id="update_fname" placeholder="Enter firstName"required>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Enter last Name</label>
										<input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}"id="update_lname" placeholder="Enter lastName"required>
									</div>
									<div class="col-md-12">
										<label  class="form-label">Enter userEmail</label>
										<input type="email" name="user_email" class="form-control"value="{{ old('user_email') }}"id="update_uemail" placeholder="Enter userEmail"required>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="update_usercountry" class="form-select" onchange="getAddress(this.value,'country')" required>
										</select>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">State</label>
										<select id="update_UserState" class="form-select" onchange="getAddress(this.value,'state')" required>
										</select>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">District</label>
										<select id="update_UserDistrict"
											class="form-select" onchange="getAddress(this.value,'district')"   required>
										</select>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">City</label>
										<select id="update_UserCity" class="form-select" required>
										</select>
									</div>
									<div class="col-md-6">
										<label class="form-label">Enter pin Code</label>
										<input type="text" name="pin_code" class="form-control"	value="{{ old('pin_code') }}"id="update_upincode" placeholder="Enter pinCode"required>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="update_storeUser">Update</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openUpdateUserModal"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>






