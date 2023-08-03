{{-- start table  --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="subproductModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Product</h5>
                    <button type="button" class="button-24 close_subproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All Sub Product</h6>
                    <hr />
                    <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-primary" id="openCreateSubProductModal">
                                Add Form
                            </button><br><br>
                        </h3>
                    </div>
                    <div id="success_message"></div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover w-100" id="data-table">
                            <thead>
                                <tr>
                                    <th style="width:2px">ID</th>
                                    <th style="width:10px">Product Name</th>
                                    <th style="width:10px">Base Product ID</th>
                                    <th style="width:50px">Action</th>
                                </tr>
                            </thead>
                            <tbody id="subproduct_datatable">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt button close_subproductModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end table --}}
{{-- create start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="subproductAdd" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Product</h5>
                    <button type="button" class="button-24 close_openCreateSubproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Add Sub Product</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="col-md-12">
                                        <label for="bsValidation2" class="form-label">Enter Product Name</label>
                                        <input type="text" name="product_name" class="form-control" value="{{old('product_name')}}" id="subproductname"  placeholder="Enter Sub_product_name" required/>
                                    </div>
                                    <br>
                                   <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">Base Product </label>
                                        <select id="baseproduct" class="form-select single-select-clear"  data-placeholder="Choose one thing" required>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-primary px-4" id="storeSubproduct">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openCreateSubproductModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end create start  --}}
{{-- edit model start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateSubproductModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Sub Product</h5>
                    <button type="button" class="button-24 close_openUpdateSubproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Update Sub Product</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="col-md-12">
                                        <input type="hidden" id="subproductid">
                                        <label for="bsValidation2" class="form-label">Enter Product Name</label>
                                        <input type="text" name="product_name" class="form-control" value="product_name"  id="update_product" placeholder="Enter ProductName" required>
                                    </div><br>

                                <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">Base Product</label>
                                        <select id="updatebaseproduct" class="form-select single-select-clear"  data-placeholder="Choose one thing" required>
                                        </select>
                                    </div><br>
                                <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="button" class="btn btn-primary px-4"  id="update_subproductCity">Update</button>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button"class="button-57_alt button-58_alt close_openUpdateSubproductModal"data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- edit model end --}}