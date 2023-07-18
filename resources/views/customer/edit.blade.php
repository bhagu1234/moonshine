<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateCustomerModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Customer </h5>
                    <button type="button" class="button-24 close_openUpdateCustomerModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Update Customer</h5>
							</div>
							<div class="card-body p-4">
								<!-- <form class="row g-3 needs-validation" novalidate> -->
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Customer Name</label>
										<input type="text" class="form-control" id="update_customer_name" placeholder="customer Name"  required>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Post box</label>
										<input type="text" class="form-control" id="update_customerPostBox" placeholder="Post box"  required>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation13" class="form-label">Group & Cos in group</label>
										<textarea class="form-control" id="update_customer_groupCos"  rows="3" required></textarea>
									</div>
                                    <div class="col-md-12">
										<label  class="form-label">Address 1</label>
										<textarea class="form-control"   rows="3" id="update_customer_address1" required></textarea>
									</div>
                                    <div class="col-md-12">
										<label  class="form-label">Address 2</label>
										<textarea class="form-control"   rows="3" id="update_customer_address2" required></textarea>
									</div>
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label">Area</label>
										<input type="text" class="form-control" id="update_CustomerArea" placeholder="Area" required>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Land mark</label>
										<input type="text" class="form-control" id="update_customerLandMark" placeholder="land mark" required>
									</div>
									<div class="col-md-12">
										<label for="bsValidation9" class="form-label">Country</label>
										<select id="update_customer_country" class="form-select" onchange="getAddress(this.value,'country')" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">State</label>
										<select id="update_CustomerState" class="form-select" onchange="getAddress(this.value,'state')" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">District</label>
										<select id="update_CustomerDistrict" class="form-select" onchange="getAddress(this.value,'district')"   required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">City</label>
										<select id="update_CustomerCity" class="form-select" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">Region</label>
										<select id="CustomerRegion" class="form-select" required>
										</select>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation9" class="form-label">Address Type</label>
										<select id="update_CustomerType" class="form-select" required>
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation10" class="form-label">Phone number</label>
										<input type="text" class="form-control" id="update_customerPhoneNo" placeholder="mobile" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Fax</label>
										<input type="text" class="form-control" id="update_customerFax" placeholder="Fax" required>
									</div>
                                    <div class="col-md-6">
										<label class="form-label">Location Email</label>
										<input type="email" class="form-control" id="update_customerLocationEmail" placeholder="location email" required>
									</div>
                                    
									<div class="col-md-6">
										<label class="form-label">Website</label>
										<input type="text" class="form-control" id="update_customerWebsite" placeholder="Website" required>
									</div>
                                    
									<div class="col-md-6">
										<label class="form-label">Referenced By</label>
										<input type="text" class="form-control" id="update_customerReferencedBy" placeholder="Referenced By" required>
									</div>
									
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Trade Activity</label>
										<textarea class="form-control" id="update_CustomerTradeActivity" placeholder="Trade Activity ..." rows="3" required></textarea>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation13" class="form-label">Facility And Location</label>
										<textarea class="form-control" id="update_CustomerFacilityAndLocation" placeholder="Facility And Location ..." rows="3" required></textarea>
									</div>
                                    <div class="advanceCustomer">
                                        <div class="col-md-12">
                                            <label class="form-label">Contact</label>
                                            <input type="text" class="form-control" id="update_customerContact" placeholder="Contact" >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Bank</label>
                                            <input type="text" class="form-control" id="update_customerBank" placeholder="Bank" >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Credit Facility</label>
                                            <input type="text" class="form-control" id="update_customerCreditFacility" placeholder="Credit Facility" >
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Visite & Rating</label>
                                            <input type="text" class="form-control customerVisiteRating"  placeholder="Visite & Rating" >
                                        </div>
                                    </div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4" id="update_storeCustomer">Update</button>
                                            <button class="btn btn-light px-4 addAdvanceCustomer" >Add Advance</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openUpdateCustomerModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>