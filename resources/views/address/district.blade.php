{{-- start table  --}}

<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="districtModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">District</h5>
                    <button type="button" class="button-24 close_districtModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All District</h6>
                    <hr />
                    <div class="card-header">
                    <h3 class="card-title">
                    <button type="button" class="btn btn-primary" id="openCreateDistrictModal">
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
                                    <th style="width:10px">State Id</th>
                                    <th style="width:10px">District Name</th>
                                    <th style="width:50px">Action</th>
                                </tr>
                            </thead>
                            <tbody id="district_datatable">

                            </tbody>
                    </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt button close_districtModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end table --}}

{{-- create start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="districtAdd" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">District</h5>
                    <button type="button" class="button-24 close_openCreateDistrictModal"
                        data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Add District</h5>
                                </div>
                                <!-- <form> -->
                                <div class="card-body p-4">

                                    <div class="col-md-6">
                                        <label for="bsValidation2" class="form-label">Enter District Name</label>
                                        <input type="text" name="district_name" class="form-control"  value="{{ old('district_name') }}"id="districtname" placeholder="Enter Districtname" required />
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">State</label>
                                        <select id="district_createstate" class="form-select single-select-clear-field" data-placeholder="Choose one thing" required >
                                        </select>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary px-4" id="storeDistrict">Submit</button>
                                </div>
                            <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_openCreateDistrictModal" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- end create start  --}}
{{-- edit model start --}}
<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="UpdateDistrictModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">District</h5>
                    <button type="button" class="button-24 close_openUpdateDistrictModal"data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <!--end breadcrumb-->
                    <div class="row">
                        <div class="col-xl-6 mx-auto">
                            <div class="card">
                                <div class="card-header px-4 py-3">
                                    <h5 class="mb-0">Update District</h5>
                                </div>
                                <div class="card-body p-4">
                                    <input type="hidden" id="cdistrict_id">
                                    <div class="col-md-6">
                                    <label for="bsValidation2" class="form-label">Enter District Name</label>
                                    <input type="text" name="district_name" class="form-control"   value="" id="update_districtname"  placeholder="Enter DistrictName" required >
                                    </div><br>
                                    <div class="col-md-12">
                                        <label for="bsValidation9" class="form-label">District</label>
                                        <select id="district_update_state" class="form-select single-select-clear-field" data-placeholder="Choose one thing" required >
                                        </select>
                                    </div><br>
                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="button" class="btn btn-primary px-4" id="update_storeDistrict">Update</button>
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
                  <button type="button" class="button-57_alt button-58_alt close_openUpdateDistrictModal"data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- edit end --}}

