<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createbankModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Bank </h5>
                    <button type="button" class="button-24 close_opencreatebankModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add bank</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
                                    <input id="bankCustomer" type="hidden">
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Bank name</label>
                                        <input type="text" class="form-control" id="create_bankNameCustomer" placeholder="Bank name" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Branch name</label>
                                        <input type="text" class="form-control" id="create_BranchNameCustomer" placeholder="Branch name" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Bank Address</label>
                                        <textarea class="form-control" id="create_bankAddressCustomer" placeholder="Bank Address" rows="3" ></textarea>
                                        
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Account number</label>
                                        <input type="text" class="form-control" id="create_AccountNumberCustomer" placeholder="Account number" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">IBAN Account number</label>
                                        <input type="text" class="form-control" id="create_IBANAccountNumberCustomer" placeholder="IBAN Account number" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Account Holder</label>
                                        <input type="text" class="form-control" id="create_AccountHolderCustomer" placeholder="Account Holder" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">PR-officer</label>
                                        <input type="text" class="form-control" id="create_pr_officerCustomer" placeholder="PR-officer" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">Bank email</label>
                                        <input type="text" class="form-control" id="create_BankEmailCustomer" placeholder="Bank email" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">IFSC code</label>
                                        <input type="text" class="form-control" id="create_IFSC_codeCustomer" placeholder="IFSC code" >
									</div>
                                    <div class="col-md-4">
                                        <label for="bsValidation1" class="form-label">SWIFT code</label>
                                        <input type="text" class="form-control" id="create_SWIFT_codeCustomer" placeholder="SWIFT code" >
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label">Bank Rating</label>
                                        <select id="create_bankRatingCustomer"  class="form-select">
                                            <option selected disabled>select</option>
                                            <option value='average'>Average</option>
                                            <option value='excellent'>Excellent</option>
                                            <option value='good'>Good</option>
                                            <option value='poor'>Poor</option> 
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Direct FAC</label>
                                        <input type="text" class="form-control" id="create_directFacCustomer" placeholder="Direct FAC" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Indirect FAC</label>
                                        <input type="text" class="form-control" id="create_IndirectFacCustomer" placeholder="Indirect FAC" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Bank reference</label>
                                        <input type="text" class="form-control" id="create_bankReferenceCustomer" placeholder="Bank reference" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Our comments</label>
										<textarea class="form-control" id="create_CommentsCustomer" placeholder="Comments" rows="3" required></textarea>
									</div>
                                   
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storeBank">Submit</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_opencreatebankModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>