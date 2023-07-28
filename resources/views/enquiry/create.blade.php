<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createEnquiryModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Enquiry </h5>
                    <button type="button" class="button-24 close_opencreateEnquiryModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add Enquiry</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Customer</label>
                                        <select id="create_enquiryCustomer" class="form-select"   onchange="customerContact(this.value,'get_contact')">
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Contact</label>
                                        <select id="create_enquirycontact" class="form-select">
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Product</label>
                                        <select id="create_enquiryProduct" class="form-select" >
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">UOM</label>
                                        <select id="create_enquiryUom" class="form-select" >
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Total Qty</label>
										<input type="number" class="form-control" id="create_enquiryTotalQty" placeholder="Qty" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquiry value AED</label>
										<input type="text" class="form-control" id="create_enquiryEnquiryValueAED" placeholder="Enquiry value AED" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Margin set</label>
										<input type="text" class="form-control" id="create_enquiryMarginSet" placeholder="Margin set" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquiry date</label>
										<input type="date" class="form-control" id="create_enquiryenquiryDate" placeholder="Enquiry date" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label"> Enquiry priority</label>
										<select id="create_enquiryEnquiryPrioprity" class="form-select">
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquiry focal points</label>
										<select id="create_enquiryEnquiryfocalPoint" class="form-select">
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">KB commitment</label>
										<input type="text" class="form-control" id="create_enquiryKbCommitment" placeholder="KB commitment" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquiry mode</label>
										<select id="create_enquiryEnquiryMode" class="form-select">
                                            <option selected disabled>select</option>
                                            <option value='e-mail'>E-mail</option>
                                            <option value='fax'>FAX</option>
                                            <option value='g-ofr'>G-OFR</option>
                                            <option value='others'>Others</option>
                                            <option value='verbal'>Verbal</option>
                                            <option value='visit'>Visit</option>
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquiry Period</label>
										<input type="text" class="form-control" id="create_enquiryPeriod" placeholder="Enquiry Period" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Enquired Items</label>
										<input type="number" class="form-control" id="create_enquiryItems" placeholder="Enquired Items" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Inco-Terms</label>
										<select id="create_enquiryEnquiryInfoTerms" class="form-select">
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Supply term</label>
										<select id="create_enquirySupplyTerm" class="form-select">
                                            <option selected disabled>select</option>
                                            <option value='collection'>Collection</option>
                                            <option value='delivery'>Delivery</option>
                                            <option value='others'>Others</option>
                                            <option value='port'>Port</option>
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Delivery place</label>
										<input type="text" class="form-control" id="create_enquiryDeliveryPlace" placeholder="Delivery place" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation13" class="form-label">Enquiry Reference</label>
										<textarea class="form-control" id="create_EnquiryReference"  rows="3" ></textarea>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation13" class="form-label">Enquiry Conditions</label>
										<textarea class="form-control" id="create_EnquiryConditions"  rows="3" ></textarea>
									</div>
                                    <div class="col-md-12">
										<label for="bsValidation13" class="form-label">Enquiry Abstract</label>
										<textarea class="form-control" id="create_EnquiryAbstract"  rows="3" ></textarea>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storeEnquiry">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_opencreateEnquiryModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>