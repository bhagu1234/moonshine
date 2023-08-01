<!-- {{-- start table  --}} -->
<div class="container">
    <div class="modal fade bd-example-modal-xl" 
    data-backdrop="static" id="countryModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Country </h5>
                    <button type="button" class="button-24 close_countryModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All Country</h6>
                    <hr/>
                    <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-primary" 
                            id="openCreateCountryModal">
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
                                    <th style="width:10px">CountryName</th> 
                                    <th style="width:50px">Action</th>  
                                </tr>
                            </thead>
                            <tbody id="country_datatable">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt button close_countryModal"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- {{-- end table --}} -->

<!-- {{-- create start--}} -->
<div class="container">   
	<div class="modal fade bd-example-modal-xl" data-backdrop="static"
     id="countryAdd" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Country</h5>
                    <button type="button" class="button-24 close_openCreateCountryModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Add Country</h5>
                                </div>
                                <div class="card-body p-4">                            
                                    <div class="col-md-12">
                                        <label for="bsValidation2" class="form-label">Enter CountryName</label>
                                        <input type="text" name="country_name" class="form-control"
                                        value="{{ old('country_name') }}"id="countryname" placeholder="Enter Countryname"required>
                                    </div>
                                    <br>
                                    <button type="button"  class="btn btn-primary px-4"   id="storeCountry">Submit</button>                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openCreateCountryModal"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- {{--end create start  --}} -->

<!-- {{-- edit model start --}} -->
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static"
     id="UpdateCountryModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Country</h5>
                    <button type="button" class="button-24 close_openUpdateCountryModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                   <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Update Country</h5>
                                </div>
                                <div class="card-body p-4">
                                    <div class="col-md-12">
                                        <input type="hidden" id="co_id">
                                            <label for="bsValidation2" 
                                            class="form-label">Enter Countryname</label>
                                            
                                            <input type="text" name="country_name" class="form-control"
                                            value=""
                                            id="update_countryname" 
                                            placeholder="Enter CountryName"required>
                                        </div><br>
                                    
                                        <div class="col-md-12">
                                            <div class="d-md-flex d-grid align-items-center gap-3">
                                                <button type="button" class="btn btn-primary px-4" id="update_storeCountry">Update</button>
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
                    <button type="button" class="button-57_alt button-58_alt close_openUpdateCountryModal"  data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end edit  -->