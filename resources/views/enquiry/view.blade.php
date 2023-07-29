<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="EnquiryDetailsviewModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Enquiry </h5>
                    <button type="button" class="button-24 close_EnquiryModalview" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="col">
						<h6 class="mb-0 text-uppercase">Enquiry Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs nav-success" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#ViewEnquiryDetails" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-title">Enquiry Details</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#EnqViewSupplierDetails" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Supplier Details</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#EnqCustomerWindow" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Customer Window On demand</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="ViewEnquiryDetails" role="tabpanel">
                                        <div class="row">
                                            <h5>ENQUIRY DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Enquiry Number</label> :- 
                                                <b id='view_EnquiryNumber'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation2" class="form-label">Enquiry Date</label> :- 
                                                <b id='viewEnquiryDate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Old By Days</label> :- 
                                                <b id='view_enquiryOldByDays'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label"> Enquiry Status</label> :- 
                                                <b id='viewEnquiryStatus'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Enquiry Priority</label> :-
                                                <b id='viewEnquiryPriority'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Customer Name</label> :- 
                                                <b id='viewEnqCustomerName'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">KB Commitment</label> :- 
                                                <b id='viewEnqKbCommitment'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry Mode</label> :- 
                                                <b id='viewEnqEnquiryMode'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry Period</label> :- 
                                                <b id='viewEnqEnquiryPeriod'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Inco Trim</label> :- 
                                                <b id='viewEnqIncoTrim'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Supply Term</label> :- 
                                                <b id='viewEnqSupplyTerm'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Delivery Place</label> :- 
                                                <b id='viewEnqDeliveryPlace'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry Reference</label> :- 
                                                <b id='viewEnqEnquiryReference'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry Conditions</label> :- 
                                                <b id='viewEnqEnquiryConditions'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry Abstract</label> :- 
                                                <b id='viewEnqEnquiryAbstracts'></b>
                                            </div>
                                            <h5>PRODUCT DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Product Specific</label> :- 
                                                <b id='viewEnqProductSpecific'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Total QTY</label> :- 
                                                <b id='viewEnqTotalQty'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">UOM</label> :- 
                                                <b id='viewEnqUOM'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Enquiry value AED</label> :- 
                                                <b id='viewEnqValueAed'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Margin Set</label> :- 
                                                <b id='viewEnqMarginSet'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Product Category</label> :- 
                                                <b id='viewEnqProductCategory'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Base Product</label> :- 
                                                <b id='viewEnqBaseProduct'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Sub Product</label> :- 
                                                <b id='viewEnqSubProduct'></b>
                                            </div>
                                            <h5>CUSTOMER DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label  class="form-label">Customer Number</label> :- 
                                                <b id='viewEnqCustomerNumber'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">City & State</label> :- 
                                                <b id='viewEnqCityState'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Enquirer </label> :-
                                                <b id='viewEnqEnquirer'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Designation </label> :- 
                                                <b id='viewEnqDesignation'></b>
                                            </div>
                                            <!-- <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label"> Price Structure</label> :- 
                                                <b id='pro_priceStrucVIew'></b>
                                            </div> -->
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Direct Tel</label> :- 
                                                <b id='viewEnqDirectTel'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Mobile Number</label> :- 
                                                <b id='viewEnqMobileNumber'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Official Mail-1</label> :- 
                                                <b id='viewEnqOfficialMail1'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Official Mail-2</label> :- 
                                                <b id='viewEnqOfficialMail2'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation4" class="form-label">Sales Person</label> :- 
                                                <b id='viewEnqSalesPerson'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation4" class="form-label">Kick Bite</label> :- 
                                                <b id='viewEnqKickBite'></b>
                                            </div>
                                        </div>
									</div>
									<div class="tab-pane fade" id="EnqViewSupplierDetails" role="tabpanel">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Customer Name</th>
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
									<div class="tab-pane fade" id="EnqCustomerWindow" role="tabpanel">
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
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_EnquiryModalview" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>