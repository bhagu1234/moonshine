{{-- start table  --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="baseproductModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Base Product</h5>
                    <button type="button" class="button-24 close_baseproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All Base Product</h6>
                    <hr />
                    <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-primary" id="openCreateBaseProductModal">
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
                                    <th style="width:10px">Category</th>
                                    <th style="width:50px">Action</th>
                                </tr>
                            </thead>
                            <tbody id="baseproduct_datatable">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt button close_baseproductModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end table --}}
{{-- create start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="baseproductAdd" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Base Product</h5>
                    <button type="button" class="button-24 close_openCreateBaseproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Add Base Product</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="col-md-12">
                                        <label for="bsValidation2" class="form-label">Enter Product Name</label>
                                        <input type="text" name="product_name" class="form-control" value="{{old('product_name')}}" id="baseproductname"  placeholder="Enter Base_productname" required/>
                                    </div>
                                    <br>
                                   <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">Category</label>
                                        <select id="baseproductcategory" class="form-select single-select-clear"  data-placeholder="Choose one thing" required>
                                        </select>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-primary px-4" id="storeBaseproduct">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openCreateBaseproductModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end create start  --}}
{{-- edit model start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateBaseproductModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Base Product</h5>
                    <button type="button" class="button-24 close_openUpdateBaseproductModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Update Base Product</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="col-md-12">
                                     <input type="hidden" id="baseproductid">
                                        <label for="bsValidation2" class="form-label">Enter Product Name</label>
                                        <input type="text" name="product_name" class="form-control" value="product_name"  id="update_productname" placeholder="Enter ProductName" required>
                                    </div><br>

                                <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">Category</label>
                                        <select id="updatecategory" class="form-select single-select-clear"  data-placeholder="Choose one thing" required>
                                        </select>
                                    </div><br>
                                <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="button" class="btn btn-primary px-4"  id="update_baseproductCity">Update</button>
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
                    <button type="button"class="button-57_alt button-58_alt close_openUpdateBaseproductModal"data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- edit model end --}}