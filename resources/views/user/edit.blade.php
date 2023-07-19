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
								<!-- <form class="row g-3 needs-validation" novalidate> -->

                                 
                            
                            
                                               
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Choose Id</label>
										<input type="text" name="id" class="form-control"
                                        value="{{ old('id') }}"id="id" placeholder="Enter id"required>
									</div>

                                    

									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Enter firstName</label>
										<input type="text" name="first_name" class="form-control"
                                        value="{{ old('first_name') }}"id="fname" placeholder="Enter firstName"required>
									</div>


                                    

                                    <div class="col-md-12">
										<label for="bsValidation13" class="form-label">Enter lastName</label>
										<input type="text" name="last_name" class="form-control"
                                                value="{{ old('last_name') }}"id="lname" placeholder="Enter lastName"required>
									</div>

                                   

                                    <div class="col-md-12">
										<label  class="form-label">Enter userEmail</label>
										<input type="email" name="user_email" class="form-control"
                                                value="{{ old('user_email') }}"id="uemail" placeholder="Enter userEmail"required>
									</div>

                                    

                                    <div class="col-md-12">
										<label  class="form-label">Enter userPassword</label>
                                        <input type="password" name="user_password" class="form-control"
                                        value="{{ old('user_password') }}"id="upassword"
                                        placeholder="Enter userPassword"required>
									</div>



                                   
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">
											Choose Status</label>
										<select class="form-control" name="status"id="ustatus" 
                                            value="{{ old('status') }}">
                                                <option value="">Select status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
            
                                            </select>
									</div>

									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Enter otp</label>
										<input type="text" name="otp" class="form-control"
                                                value="{{ old('otp') }}"id="uotp" placeholder="Enter otp"required>
									</div>

                               <div class="col-md-12">
										<label for="bsValidation4" class="form-label">Enter entryTime</label>
                                        <input type="text" name="entry_time" class="form-control"
                                        value="{{ old('entry_time') }}"id="uentrytime" placeholder="Enter entryTime"required>
									</div>


                                    <div class="col-md-12">
										<label for="bsValidation4" class="form-label">Enter
											 payroll</label>
                                       
                                        <input type="text" name="payroll" class="form-control"
                                            value="{{ old('payroll') }}"id="upayroll" placeholder="Enter payroll"required>
									</div>


                                   <div class="col-md-12">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="customer_country" class="form-select" onchange="getAddress(this.value,'country')" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">State</label>
										<select id="CustomerState" class="form-select" onchange="getAddress(this.value,'state')" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">District</label>
										<select id="CustomerDistrict"
                                         class="form-select" onchange="getAddress(this.value,'district')"   required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">City</label>
										<select id="CustomerCity" class="form-select" required>
										</select>
									</div>
                                    
                                    <div class="col-md-6">
										<label class="form-label">Enter pinCode</label>
										<input type="text" name="pin_code" class="form-control"
                                                value="{{ old('pin_code') }}"id="upincode" placeholder="Enter pinCode"required>
									</div>
                                    
                                    
									
									
                                   
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4" id="storeCustomer">Submit</button>
                                           
										</div>
									</div>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
                </div>
                <div class="modal-footer">
                    {{-- <button  type="submit" class="btn btn-primary" id="storeUserData">Submit</button> --}}
                    <button type="button" class="button-57_alt button-58_alt close_openCreateUserModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>






