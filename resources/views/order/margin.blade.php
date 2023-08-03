<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createMarginModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Margin </h5>
                    <button type="button" class="button-24 close_openCreateMarginModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add Margin</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
                                    <h5>Margin DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Enquiry</label>
                                        <select id="create_MarginEnquiry"  class="form-select">
										</select>
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label">Producer</label>
                                        <input type="text" class="form-control" id="create_MarginProducer" placeholder="Producer" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Margin Qty-MTe</label>
                                        <input type="text" class="form-control" id="create_MarginQtyMTe" placeholder="Margin Qty-MTe" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Margin Value-US</label>
                                        <input type="text" class="form-control" id="create_MarginValueUS" placeholder="Margin Value-US" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Margin Conf Ref</label>
                                        <input type="text" class="form-control" id="create_MarginConfRef" placeholder="Margin Conf Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Shipment Days</label>
                                        <input type="number" class="form-control" id="create_MarginShipmentDays" placeholder="Shipment Days" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship Mode</label>
                                        <input type="text" class="form-control" id="create_MarginShipMode" placeholder="Ship Mode" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship From</label>
                                        <input type="text" class="form-control" id="create_MarginShipFrom" placeholder="Ship From" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship To</label>
                                        <input type="text" class="form-control" id="create_MarginShipTo" placeholder="Ship To" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Partial Ship</label>
                                        <select id="create_MarginPartialShip"  class="form-select">
                                            <option selected disabled>select one</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Transshipment</label>
                                        <select id="create_MarginTransshipment"  class="form-select">
                                            <option selected disabled>select one</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Delivery days</label>
                                        <input type="number" class="form-control" id="create_MarginDeliverydays" placeholder="Delivery days" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Inco Term</label>
                                        <select id="create_MarginIncoTerm"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Destination</label>
                                        <input type="text" class="form-control" id="create_MarginDestination" placeholder="Destination" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Comments</label>
										<textarea class="form-control" id="create_MarginComments" placeholder="Comments" rows="3" required></textarea>
									</div>
                                    <h5>Margin REFERENCE DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Buyer Margin Ref</label>
                                        <input type="text" class="form-control" id="create_MarginBuyerMarginRef" placeholder="Buyer Margin Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Buyer Margin Date</label>
                                        <input type="date" class="form-control" id="create_MarginBuyerMarginDate" placeholder="Buyer Margin Date" >
									</div>
                                    
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mill's P-INV/SC Ref</label>
                                        <input type="text" class="form-control" id="create_MarginMillSCRef" placeholder="Mill's P-INV/SC Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mill's P-INV/SC Ref</label>
                                        <input type="date" class="form-control" id="create_MarginMillSCDate" placeholder="Mill's P-INV/SC Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Month Booked</label>
                                        <input type="month" class="form-control" id="create_MarginMonthBooked" placeholder="Month Booked" >
									</div>
                                    <!-- <div class="col-md-4">
										<label for="bsValidation1" class="form-label">MSBMT SC Ref</label>
                                        <input type="text" class="form-control" id="create_MarginMSBMTSCRef" placeholder="MSBMT SC Ref" >
									</div> -->
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">MSBMT SC Date</label>
                                        <input type="date" class="form-control" id="create_MarginMSBMTSCDate" placeholder="MSBMT SC Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Comments</label>
										<textarea class="form-control" id="create_MarginRefComments" placeholder="Comments" rows="3" required></textarea>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storeMargin">Submit</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openCreateMarginModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>