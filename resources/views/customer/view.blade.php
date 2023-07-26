<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="customerDetailsviewModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">customer </h5>
                    <button type="button" class="button-24 close_customerModalview" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="col">
						<h6 class="mb-0 text-uppercase">customer Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs nav-success" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#customerTotalDetails" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-title">Customer Details</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#customerContactView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Customer Contact</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#customerBankView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Bank</div>
											</div>
										</a>
									</li>
                                    <li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#customerCreditFacilityView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Credit Facility</div>
											</div>
										</a>
									</li>
									 <li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#customerRatingView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Rating</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="customerTotalDetails" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Group Cos</label> :- 
                                                <b class='group_cos_view'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Customer</label> :- 
                                                    <b class='customer_name_view'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Address 1</label> :- 
                                                <b class='address1_view'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label"> Address 2</label> :- 
                                                <b class='address2_view'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">location email</label> :-
                                                <b class='location_email_view'></b>
                                            </div>
                                        </div>
									</div>
									<div class="tab-pane fade" id="customerContactView" role="tabpanel">
									    <button type="button" class="btn btn-outline-primary px-5 radius-30 openCreatecontactModal" id="openCreatecontactModal">Add Contact</button>
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Contact Name</th>
                                                        <th>POC</th>
                                                        <th>Status</th>
                                                        <th>Designation</th>
                                                        <th>Sitting Office</th>
                                                        <th>Kick Bite</th>
                                                        <th>Offical BG </th>
                                                        <th>Phone Number</th>
                                                        <th>Landline Office</th>
                                                        <th>Email 1</th>
                                                        <th>Email 2</th>
                                                        <th>Personal email</th>
                                                        <th>Skype or others</th>
                                                        <th>Date joined</th>
                                                        <th>Date Left</th>
                                                        <th>DOB</th>
                                                        <th>Age Years</th>
                                                        <th>Nationality</th>
                                                        <th>Mother tongue</th>
                                                        <th>Religion</th>
                                                        <th>Gender</th>
                                                        <th>Living in</th>
                                                        <th>Personal BG</th>
                                                        <th>Passport details</th>
                                                        <th>Password number</th>
                                                        <th>Passport issued At</th>
                                                        <th>Passport issued Date</th>
                                                        <th>Passport Expiry date</th>
                                                        <th>Visa Details</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="customer_contact_list">
                                                </tbody>
                                            </table> 
                                        </div>
									</div>
									<div class="tab-pane fade" id="customerBankView" role="tabpanel">
                                        <button type="button" class="btn btn-outline-primary px-5 radius-30 openCreatebankModal">Add Bank</button>
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Bank Name</th>
                                                        <th>Branch name</th>
                                                        <th>Address</th>
                                                        <th>Account number</th>
                                                        <th>IBAN Account number</th>
                                                        <th>Accound holder name</th>
                                                        <th>PR officer</th>
                                                        <th>Bank mail Id</th>
                                                        <th>IFSC code</th>
                                                        <th>SWIFT code</th>
                                                        <th>Bank rating</th>
                                                        <th>Direct FAC</th>
                                                        <th>Indirect FAC</th>
                                                        <th>Bank reference</th>
                                                        <th>Commants</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id='customer_bank_tabledata'>
                                                </tbody>
                                            </table> 
                                        </div>
									</div>
									<div class="tab-pane fade" id="customerCreditFacilityView" role="tabpanel">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Supplier Name</th>
                                                        <th>Product Specific Name</th>
                                                        <th>Product Range</th>
                                                        <th>Priority</th>
                                                        <th>Comments</th>
                                                        <th>Sup State</th>
                                                        <th>Bus Fields</th>
                                                        <th>Bus Scale</th>
                                                        <th>Bus Nature</th>
                                                        <th>Bus Category</th>
                                                        <th>Bus Reliability</th>
                                                        <th>Bus Sensitivity</th>
                                                        <th>Current Status</th>
                                                        <th>Website</th>
                                                        <th>Country</th>
                                                        <th>State/province</th>
                                                        <th>District</th>
                                                        <th>City</th>
                                                        <th>Remarks</th>
                                                        <th>POC</th>
                                                        <th>Name</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table> 
                                        </div>
									</div>
                                    <div class="tab-pane fade" id="customerRatingView" role="tabpanel">
                                    <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>OS-Supplier Name</th>
                                                        <th>Product Specific Name</th>
                                                        <th>Product Range</th>
                                                        <th>Priority</th>
                                                        <th>Comments</th>
                                                        <th>Sup State</th>
                                                        <th>Bus Fields</th>
                                                        <th>Bus Scale</th>
                                                        <th>Bus Nature</th>
                                                        <th>Bus Category</th>
                                                        <th>Bus Reliability</th>
                                                        <th>Bus Sensitivity</th>
                                                        <th>Current Status</th>
                                                        <th>Website</th>
                                                        <th>Country</th>
                                                        <th>State/province</th>
                                                        <th>District</th>
                                                        <th>City</th>
                                                        <th>Remarks</th>
                                                        <th>POC</th>
                                                        <th>Name</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table> 
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_customerModalview" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>