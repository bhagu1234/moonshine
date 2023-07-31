<!-- active status  -->
<div class="container">
    <div class="modal fade" data-backdrop="static" id="updateEnquiryStatusModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Change status </h5>
                    <button type="button" class="button-24 close_openupdateEnquiryStatusModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Update Enquiry</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label" id="status_label_name"></label>
                                        <input type="hidden" class="form-control" id="check_enqstatus" >
                                        <input type='hidden' id="update_status_enq_date">
                                        <input type="hidden" id="update_status_id">
                                        <input type="date" class="form-control" id="update_enquiryEnquiryActiveStatus" >
									</div>
									<div class="col-md-12 Dropped">
										<label for="bsValidation1" class="form-label">Select reason</label>
                                        <select  class="form-select" id="update_enquiryEnquiryDroppedReasonStatus" >
                                        </select>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="updateEnquiryStatus">Update</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openupdateEnquiryStatusModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>