<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createOrderModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Order </h5>
                    <button type="button" class="button-24 close_openCreateOrderModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add Order</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
                                    <h5>ORDER DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Enquiry</label>
                                        <select id="create_OrderEnquiry"  class="form-select">
										</select>
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label">Producer</label>
                                        <input type="text" class="form-control" id="create_OrderProducer" placeholder="Producer" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Order Qty-MTe</label>
                                        <input type="text" class="form-control" id="create_OrderQtyMTe" placeholder="Order Qty-MTe" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Order Value-US</label>
                                        <input type="text" class="form-control" id="create_OrderValueUS" placeholder="Order Value-US" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Order Conf Ref</label>
                                        <input type="text" class="form-control" id="create_OrderConfRef" placeholder="Order Conf Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Shipment Days</label>
                                        <input type="number" class="form-control" id="create_OrderShipmentDays" placeholder="Shipment Days" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship Mode</label>
                                        <input type="text" class="form-control" id="create_OrderShipMode" placeholder="Ship Mode" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship From</label>
                                        <input type="text" class="form-control" id="create_OrderShipFrom" placeholder="Ship From" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Ship To</label>
                                        <input type="text" class="form-control" id="create_OrderShipTo" placeholder="Ship To" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Partial Ship</label>
                                        <select id="create_OrderPartialShip"  class="form-select">
                                            <option selected disabled>select one</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Transshipment</label>
                                        <select id="create_OrderTransshipment"  class="form-select">
                                            <option selected disabled>select one</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Delivery days</label>
                                        <input type="number" class="form-control" id="create_OrderDeliverydays" placeholder="Delivery days" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Inco Term</label>
                                        <select id="create_OrderIncoTerm"  class="form-select">
										</select>
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Destination</label>
                                        <input type="text" class="form-control" id="create_OrderDestination" placeholder="Destination" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Comments</label>
										<textarea class="form-control" id="create_OrderComments" placeholder="Comments" rows="3" required></textarea>
									</div>
                                    <h5>ORDER REFERENCE DETAILS:</h5>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Buyer Order Ref</label>
                                        <input type="text" class="form-control" id="create_OrderBuyerOrderRef" placeholder="Buyer Order Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Buyer Order Date</label>
                                        <input type="date" class="form-control" id="create_OrderBuyerOrderDate" placeholder="Buyer Order Date" >
									</div>
                                    
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mill's P-INV/SC Ref</label>
                                        <input type="text" class="form-control" id="create_OrderMillSCRef" placeholder="Mill's P-INV/SC Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Mill's P-INV/SC Ref</label>
                                        <input type="date" class="form-control" id="create_OrderMillSCDate" placeholder="Mill's P-INV/SC Ref" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">Month Booked</label>
                                        <input type="month" class="form-control" id="create_OrderMonthBooked" placeholder="Month Booked" >
									</div>
                                    <!-- <div class="col-md-4">
										<label for="bsValidation1" class="form-label">MSBMT SC Ref</label>
                                        <input type="text" class="form-control" id="create_OrderMSBMTSCRef" placeholder="MSBMT SC Ref" >
									</div> -->
                                    <div class="col-md-4">
										<label for="bsValidation1" class="form-label">MSBMT SC Date</label>
                                        <input type="date" class="form-control" id="create_OrderMSBMTSCDate" placeholder="MSBMT SC Date" >
									</div>
                                    <div class="col-md-4">
										<label for="bsValidation13" class="form-label">Comments</label>
										<textarea class="form-control" id="create_OrderRefComments" placeholder="Comments" rows="3" required></textarea>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storeOrder">Submit</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openCreateOrderModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>