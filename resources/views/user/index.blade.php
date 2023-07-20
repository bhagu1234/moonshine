{{-- table start --}}

<div class="container">
    <div class="modal fade bd-example-modal-xl" 
    data-backdrop="static" id="userModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">User </h5>
                    <button type="button" class="button-24 close_userModal" 
                    data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All Users</h6>
                    <hr/>
                    <div class="card-header">
                        <h3 class="card-title">
                            <button type="button" class="btn btn-primary" 
                            id="openCreateUserModal">
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
                                    <th style="width:15px">Fisrt Name</th> 
                                    <th style="width:10px">Last Name</th>
                                    <th style="width:10px">User Email</th> 
                                    <th style="width:10px">Country</th> 
                                    <th style="width:10px">State</th>
                                    <th style="width:10px">City</th> 
                                    <th style="width:10px">pin Code</th>
                                    <th style="width:50px">Action</th>  
                                </tr>
                            </thead>
                            <tbody id="user_datatable">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_userModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- table end --}}
