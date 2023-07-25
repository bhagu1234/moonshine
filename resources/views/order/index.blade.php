<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="orderModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Order </h5>
                    <button type="button" class="button-24 close_orderModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All Orders </h6> <button id="openCreateorderModal">Add Order</button>
                    <hr/>
                    <div class="table-responsive">
                        <table  class="data_table table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>order Name</th>
                                    <th>User</th>
                                    <th>Bank</th>
                                    <th>Group cos</th>
                                    <th>Address 1</th>
                                    <th>Address 2</th>
                                    <th>Area</th>
                                    <th>Land Mark</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Address Type</th>
                                    <th>Mobile</th>
                                    <th>Fax</th>
                                    <th>Location Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="order_datatable">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_orderModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>