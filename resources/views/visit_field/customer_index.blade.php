<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="VisitCustomerModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">Visit Fields </h5>
                    <button type="button" class="button-24 close_VisitCustomerModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">Visit fields </h6> <button id="openCreateVisitCustomerModal">Add new</button>
                    <hr/>
                    <div class="table-responsive">
                        <table  class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer Name</th>
                                    <th>Date</th>
                                    <th>AM/PM</th>
                                    <th>Visit Place</th>
                                    <th>Visited By</th>
                                    <th>Business Nature</th>
                                    <th>Contact Person</th>
                                    <th>Designation</th>
                                    <th>Contact number</th>
                                    <th>Email-1</th>
                                    <th>Email-2</th>
                                    <th>Purpose of visit</th>
                                    <th>Outcome of visit</th>
                                    <th>Visit Rating</th>
                                    <th>Next or Up</th>
                                    <th>Next visit</th>
                                    <th>Category</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="VisitCustomer_datatable">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_VisitCustomerModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>