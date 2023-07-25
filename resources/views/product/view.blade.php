<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="productDetailsviewModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Product </h5>
                    <button type="button" class="button-24 close_productModalview" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <div class="col">
						<h6 class="mb-0 text-uppercase">Product Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<ul class="nav nav-tabs nav-success" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" data-bs-toggle="tab" href="#ProductSpecificView" role="tab" aria-selected="true">
											<div class="d-flex align-items-center">
												<div class="tab-title">Product Specific</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#customerSpecificView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Customer Specific</div>
											</div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#LocalSuppliersView" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">Local Suppliers</div>
											</div>
										</a>
									</li>
                                    <li class="nav-item" role="presentation">
										<a class="nav-link" data-bs-toggle="tab" href="#OS_SuppliersVIew" role="tab" aria-selected="false">
											<div class="d-flex align-items-center">
												<div class="tab-title">OS-Suppliers</div>
											</div>
										</a>
									</li>
								</ul>
								<div class="tab-content py-3">
									<div class="tab-pane fade show active" id="ProductSpecificView" role="tabpanel">
                                        <div class="row">
                                            <h5>MAIN DETAILS:</h5>
                                            <div class="col-md-6">
                                                <label for="bsValidation1"class="form-label">Product Specific Name</label> :- 
                                                <b id='pro_specificName'></b>
                                            </div>
                                            <div class="col-md-6">
                                                    <label for="bsValidation2" class="form-label">Product Full Name</label> :- 
                                                    <b id='pro_fullName'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Product category name</label> :- 
                                                <b id='pro_Category_name'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label"> Base product Name</label> :- 
                                                <b id='pro_basePro_name'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Sub product Name</label> :-
                                                <b id='pro_subPro_name'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation13" class="form-label">Grades</label> :- 
                                                <b id='pro_grades_view'></b>
                                            </div>
                                            <h5>OTHER DETAILS :</h5>
                                            <div class="col-md-6">
                                                <label  class="form-label">Standards</label> :- 
                                                <b id='pro_standards_name'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label  class="form-label">Dimensions & Properties</label> :- 
                                                <b id='pro_dimen_properties'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Technical Specs</label> :-
                                                <b id='pro_tecnicalSpView'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Applications</label> :- 
                                                <b id='pro_applicationVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label"> Price Structure</label> :- 
                                                <b id='pro_priceStrucVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label"> Packing Method</label> :- 
                                                <b id='pro_packingMeVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Weight calculation</label> :- 
                                                <b id='pro_weightCalVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation3" class="form-label">Comments</label> :- 
                                                <b id='pro_commentsVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">UOM</label> :- 
                                                <b id='pro_uomVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation4" class="form-label">Shipment Mode</label> :- 
                                                <b id='pro_shipmentmoVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation4" class="form-label">HS Code</label> :- 
                                                <b id='pro_HsCodeVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Country A</label> :- 
                                                <b id='pro_countryAVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Country B</label> :- 
                                                <b id='pro_countryBVIew'></b>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="bsValidation9" class="form-label">Country C</label> :- 
                                                <b id='pro_countryCVIew'></b>
                                            </div>    
                                        </div>
									</div>
									<div class="tab-pane fade" id="customerSpecificView" role="tabpanel">
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
									<div class="tab-pane fade" id="LocalSuppliersView" role="tabpanel">
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
                                    <div class="tab-pane fade" id="OS_SuppliersVIew" role="tabpanel">
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
                    <button type="button" class="button-57_alt button-58_alt close_productModalview" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>