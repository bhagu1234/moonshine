<div class="container">
    <div class="modal fade bd-example-modal-xl" data-backdrop="static" id="categoryModal" role="dialog"
        style="backdrop-filter: blur(1px) contrast(.1);">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style="height:fit-content; ">
                <div class="modal-header">
                    <h5 class="modal-title">category </h5>
                    <button type="button" class="button-24 close_categoryModal" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-0 text-uppercase">All categorys </h6> <button id="openCreatecategoryModal">Add category</button>
                    <hr/>
                    <div class="table-responsive">
                        <table  class="data_table table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>category Name</th>
                                 
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="category_datatable">
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-57_alt button-58_alt close_categoryModal"
                        data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>