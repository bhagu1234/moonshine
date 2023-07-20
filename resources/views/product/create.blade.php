<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="createProductModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);" >
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content;z-index':1039 !important ">
                <div class="modal-header">
                    <h5 class="modal-title">Product </h5>
                    <button type="button" class="button-24 close_openCreateProductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Add Product</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
                                    <h5>MAIN DETAILS:</h5>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">Product Specific Name</label>
										<input type="text" class="form-control" id="product_specific_name" placeholder="Product Specific Name">
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Product Full Name</label>
										<input type="text" class="form-control" id="product_full_name" placeholder="Product Full Name" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Product category name</label>
										<select id="product_category_name" class="form-select single-select-clear-field"   onchange="getproductCategory(this.value,'category')">
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label"> Base product Name</label>
										<select id="product_baseProduct_name" class="form-select single-select-clear-field"  data-placeholder="Choose one thing" onchange="getproductCategory(this.value,'base_product')">
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">Sub product Name</label>
										<select id="product_subProduct_name" class="form-select single-select-clear-field"  >
										</select>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation13" class="form-label">Grades</label>
										<textarea class="form-control" id="product_grades"  rows="3" ></textarea>
									</div>
                                    <h5>OTHER DETAILS :</h5>
                                    <div class="col-md-6">
										<label  class="form-label">Standards</label>
										<textarea class="form-control"   rows="3" id="product_standards" ></textarea>
									</div>
                                    <div class="col-md-6">
										<label  class="form-label">Dimensions & Properties</label>
										<textarea class="form-control"   rows="3" id="product_DimensionsProperties" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label">Technical Specs</label>
										<textarea class="form-control"   rows="3"  id="product_TechnicalSpecs" placeholder="Technical Specs" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label">Applications</label>
										<textarea class="form-control"   rows="3"  id="product_Applications" placeholder="Applications" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label"> Price Structure</label>
										<textarea class="form-control"   rows="3"  id="product_PriceStructure" placeholder=" Price Structure" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label"> Packing Method</label>
										<textarea class="form-control"   rows="3"  id="product_PackingMethod" placeholder=" Packing Method" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label">Weight calculation</label>
										<textarea class="form-control"   rows="3"  id="product_Weightcalculation" placeholder="Weight calculation" ></textarea>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label">Comments</label>
										<textarea class="form-control"   rows="3"  id="product_Comments" placeholder="Comments" ></textarea>
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation9" class="form-label">UOM</label>
										<select id="product_UOM"  class="form-select single-select-clear-field"  data-placeholder="Choose one thing">
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation4" class="form-label">Shipment Mode</label>
										<input type="text" class="form-control" id="product_shipmentMode" placeholder="Shipment Mode" >
									</div>
                                    <div class="col-md-6">
										<label for="bsValidation4" class="form-label">HS Code</label>
										<input type="text" class="form-control" id="product_HSCode" placeholder="HS Code" >
									</div>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">Country A</label>
										<select id="product_country_a" class="form-select single-select-clear-field"  data-placeholder="Choose one thing">
										</select>
									</div>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">Country B</label>
										<select id="product_country_b" class="form-select single-select-clear-field"  data-placeholder="Choose one thing">
										</select>
									</div>
                                    
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">Country C</label>
										<select id="product_country_c" class="form-select single-select-clear-field"  data-placeholder="Choose one thing">
										</select>
									</div>
                                    
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="button" class="btn btn-primary px-4" id="storeProduct">Submit</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openCreateProductModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>