<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="StatusModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Status</h5>
                    <button type="button" class="button-24 close_StatusModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Add Status</h5>
                                </div>
                                <div class="card-body p-4">
                                    <form class="row g-3 needs-validation" novalidate>
                                        <div class="col-md-12">
                                            <label for="bsValidation1" class="form-label">Status Name</label>
                                            <input type="text" class="form-control" id="statusname" placeholder="Enter Name"  required><br>
                                            <button type="button" class="btn btn-primary px-4" id="storeStatus">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mb-0 text-uppercase">Status </h6>
                    <hr/>
                    <div class="table-responsive">
                        <table  class=" table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Status Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="status_datatable">
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_StatusModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- start edit  ==================================================-->
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateStatusModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Status </h5>
                    <button type="button" class="button-24 close_openUpdateStatusModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Edit Status</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label">Status Name</label>
                                        <input type="hidden" id="status_id">
										<input type="text" class="form-control" id="update_Status_name" placeholder="Status Name"  required>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="updateStatus">Update</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openUpdateStatusModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end edit ==================================================== -->