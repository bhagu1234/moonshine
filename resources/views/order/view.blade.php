<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="OrderDetailsviewModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Order details</h5>
                    <button type="button" class="button-24 close_orderDetailsModalview" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <div class="row">
                            <h5>MAIN DETAILS:</h5>
                            <div class="col-md-6">
                                <label for="bsValidation1"class="form-label">Enquiry No</label> :- 
                                <b id='orderView_enq_no'></b>
                            </div>
                            <div class="col-md-6">
                                    <label for="bsValidation2" class="form-label">Customer Name</label> :- 
                                    <b id='order_viewCustomername'></b>
                            </div>
                            <div class="col-md-6">
                                <label for="bsValidation9" class="form-label">Exporter Name</label> :- 
                                <b id='orderView_exportername'></b>
                            </div>
                            <div class="col-md-6">
                                <label for="bsValidation9" class="form-label">Order Status</label> :- 
                                <b id='orderView_orStatus'></b>
                            </div>
                            <div class="col-md-6">
                                <label for="bsValidation9" class="form-label">Master Category</label> :-
                                <b id='orderView_masterCat'></b>
                            </div>
                            <div class="col-md-6">
                                <label for="bsValidation13" class="form-label">Commodity & Qty</label> :- 
                                <b id='orderViewCommodityQty'></b>
                            </div>
                            <div class="col-md-6">
                                <label for="bsValidation13" class="form-label">Our Offer Date</label> :- 
                                <b id='orderViewfferDate'></b>
                            </div>
                        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs nav-success" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#order_details_or_ref" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-title">Order details & references</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#order_details_margins" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Margins</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#order_details_payment" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Payment details</div>
											</div>
										</a>
									</li>
                                    <li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#order_details_shipment" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Shipment details</div>
											</div>
										</a>
									</li>
                                    <li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#order_details_onDemand" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Order details (On Demand)</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="order_details_or_ref" role="tabpanel">
                                        <div class="row">
                                            <h5>ORDER DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Producer</label> :- 
                                                <b id='orderViewProducer'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Order Qty-MT</label> :- 
                                                    <b id='orderViewQtyMt'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Order Value-US</label> :- 
                                                <b id='orderViewValueUs'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label"> Order Conf Ref</label> :- 
                                                <b id='orderViewConfRef'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Shipment Days</label> :-
                                                <b id='orderViewShipmentDays'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Ship Mode</label> :- 
                                                <b id='orderViewShipMode'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Ship From</label> :- 
                                                <b id='orderViewShipFrom'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Ship To</label> :- 
                                                <b id='orderViewShipTo'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Partial Ship</label> :- 
                                                <b id='orderViewPartialShip'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Transshipment</label> :- 
                                                <b id='orderViewTransshipment'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Delivery days</label> :- 
                                                <b id='orderViewDeliverydays'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Inco Term</label> :- 
                                                <b id='orderViewIncoTerm'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Destination</label> :- 
                                                <b id='orderViewDestination'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Comments</label> :- 
                                                <b id='orderViewComments'></b>
                                            </div>
                                            <h5>ORDER REFERENCE DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">MSBMT SC Ref</label> :- 
                                                <b id='orderViewMSBMT_SC_Ref'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Buyer Order Ref</label> :- 
                                                <b id='orderViewBuyerOrderRef'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Buyer Order Date</label> :- 
                                                <b id='orderViewBuyerOrderDate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Mill's P-INV/SC Ref</label> :- 
                                                <b id='orderViewMill_Ref'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Mill's P-INV/SC Date</label> :- 
                                                <b id='orderViewMill_Date'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Month Booked</label> :- 
                                                <b id='orderViewMonthBooked'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">MSBMT SC Date</label> :- 
                                                <b id='orderViewMSBMT_Date'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Comments</label> :- 
                                                <b id='orderViewRefComments'></b>
                                            </div>
                                        </div>
									</div>
									<div class="tab-pane fade" id="order_details_margins" role="tabpanel">
                                        <div class="row">
                                            <a href="#">Add margin invoice</a>
                                            <br>
                                            <h5>MARGIN INVOLVED DETAILS:</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Margin Reference</label> :- 
                                                <b id='orderViewMarginReference'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Seller Side Unit Rate</label> :- 
                                                    <b id='orderViewSeller SideUnitRate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Price Diff Unit Rate</label> :- 
                                                <b id='orderViewPriceDiffUnitRate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label"> Buyer Side Unit Rate</label> :- 
                                                <b id='orderViewBuyerSideUnitRate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Total Margin Earmarked</label> :-
                                                <b id='orderViewTotalMarginEarmarked'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Margin Agreement Date</label> :- 
                                                <b id='orderViewMarginAgreementDate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">KB PO Agreed</label> :- 
                                                <b id='orderViewKBPOAgreed'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Margin Secured</label> :- 
                                                <b id='orderViewMarginSecured'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Comments</label> :- 
                                                <b id='orderViewMarginComments'></b>
                                            </div>
                                        </div>
									</div>
									<div class="tab-pane fade" id="order_details_payment" role="tabpanel">
                                        <div class="row">
                                            <a href="#">Add Payment</a>
                                            <br>
                                            <h5>ORDER PAYMENT DETAILS:</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Agreed Payment Term</label> :- 
                                                <b id='orderViewAgreedPaymentTerm'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Payment Mode</label> :- 
                                                    <b id='orderViewPaymentMode'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Payment Reference</label> :- 
                                                <b id='orderViewPaymentReference'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">LC/TT Made Date</label> :- 
                                                <b id='orderViewLCMadeDate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Total Margin Earmarked</label> :-
                                                <b id='orderViewTotalMarginEarmarked'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC / TT Amount</label> :- 
                                                <b id='orderViewLCAmount'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LDS Date in LC</label> :- 
                                                <b id='orderViewLDS_Date_LC'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LDS Days</label> :- 
                                                <b id='orderViewLDSDays'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Expiry Date</label> :- 
                                                <b id='orderViewLC_Expiry_Date'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Amend Required</label> :- 
                                                <b id='orderViewLC_Amend_Required'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Amend Ref</label> :- 
                                                <b id='orderViewLC_Amend_Ref'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Comments</label> :- 
                                                <b id='orderViewPaymentComments'></b>
                                            </div>
                                        </div>
									</div>
									<div class="tab-pane fade" id="order_details_shipment" role="tabpanel">
                                        <a href="#">Add new shipment</a>
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered " style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>PL Count</th>
                                                        <th>Invoice no</th>
                                                        <th>Invoice Date</th>
                                                        <th>Invoice Qty</th>
                                                        <th>Invoice value</th>
                                                        <th>Qty Part/Full</th>
                                                        <th>B/L no</th>
                                                        <th>BL-ETD/On board</th>
                                                        <th>Eta</th>
                                                        <th>Bal payment date</th>
                                                        <th>Bal payment amount</th>
                                                        <th>Custom cleared date</th>
                                                        <th>Order Exec</th>
                                                        <th>Comments</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table> 
                                        </div>
									</div>
                                    <div class="tab-pane fade" id="order_details_onDemand" role="tabpanel">
                                    <div class="row">
                                            <a href="#">Add Payment</a>
                                            <br>
                                            <h5>ORDER PAYMENT DETAILS:</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Agreed Payment Term</label> :- 
                                                <b id='orderViewAgreedPaymentTerm'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Payment Mode</label> :- 
                                                    <b id='orderViewPaymentMode'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Payment Reference</label> :- 
                                                <b id='orderViewPaymentReference'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">LC/TT Made Date</label> :- 
                                                <b id='orderViewLCMadeDate'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Total Margin Earmarked</label> :-
                                                <b id='orderViewTotalMarginEarmarked'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC / TT Amount</label> :- 
                                                <b id='orderViewLCAmount'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LDS Date in LC</label> :- 
                                                <b id='orderViewLDS_Date_LC'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LDS Days</label> :- 
                                                <b id='orderViewLDSDays'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Expiry Date</label> :- 
                                                <b id='orderViewLC_Expiry_Date'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Amend Required</label> :- 
                                                <b id='orderViewLC_Amend_Required'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">LC Amend Ref</label> :- 
                                                <b id='orderViewLC_Amend_Ref'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Comments</label> :- 
                                                <b id='orderViewPaymentComments'></b>
                                            </div>
                                        </div>
                                    </div>
							</div>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_orderDetailsModalview" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>