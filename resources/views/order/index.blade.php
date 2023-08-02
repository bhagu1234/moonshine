@include('includes.header')
<body>
	<!--wrapper-->
	<div class="wrapper">
	 <!--start header wrapper-->	
		@include('includes.nav')
		<!--start page wrapper -->
		<div class="page-wrapper">
            <div class="page-content">
                <div>
                    <h6 class="mb-0">Total Order</h6>
                    <button id="openCreateOrderModal">Add Order</button>
                </div>
                <div class="table-responsive">
                    <table  class="data_table table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MSBMT SC Ref</th>
                                <th>MSBMT SC Date</th>
                                <th>Enq#</th>
                                <th>Mills P-Inv/SC-Ref</th>
                                <th>Payment Ref#</th>
                                <th>Order Status</th>
                                <th>Days Left</th>
                                <th>Customer Name</th>
                                <th>Exporter Name</th>
                                <th>Commodity/QTY</th>
                                <th>Buyer order Ref</th>
                                <th>Margin Secured</th>
                                <th>LC/TT Made Date</th>
                                <th>LDS Date as per payment</th>
                                <th>Mobile</th>
                                <th>LDS Date in LC</th>
                                <th>LC Amend required</th>
                                <th>Invoice no</th>
                                <th>Invoice Qty</th>
                                <th>Invoice Amount</th>
                                <th>PL Count</th>
                                <th>BL No</th>
                                <th>BL-ETD/On Board</th>
                                <th>ETA</th>
                                <th>Custom Cleared</th>
                                <th>Qty part/full</th>
                                <th>Order Execution</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                           @foreach($data as $row)
                                <tr>
                                    <td> <a href='#' id='view_orderdata' data-value="{{$row->id}}"><i class='bx bxs-show'></i></a></td>
                                    <td>SO-{{str_pad($row->id, 6, '0', STR_PAD_LEFT)}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->msbmt_sc_date) )}}</td>
                                    <td>EQ{{str_pad($row->enquiry_id, 6, '0', STR_PAD_LEFT)}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$row->customer_name}}</td>
                                    <td></td>
                                    <td>{{$row->product_full_name}}</td>
                                    <td>{{$row->buyer_order_ref}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$row->phone_no}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> 
                                        <a href='#' id='edit_orderData' data-value='{{$row->id}}'><i class='bx bxs-edit-alt'></i></a>
                                        <a href='#' id='delete_orderData' data-value='{{$row->id}}'><i class='bx bxs-trash'></i></a>
                                    </td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <!--end switcher-->
	@include('includes.footer_script')
</body>

</html>