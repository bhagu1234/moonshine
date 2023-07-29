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
                    <h6 class="mb-0">Total Enquiry</h6>
                    <button id="openCreateEnquiryModal">Add enquiry</button>
                </div>
                <div class="table-responsive">
                    <table  class="data_table table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>enquiry#</th>
                                <th>Enquiry status</th>
                                <th>Enquiry date</th>
                                <th>Age</th>
                                <th>Enquiry priority</th>
                                <th>Customer name</th>
                                <th>enquiry Items</th>
                                <th>enquiry focal point</th>
                                <th>cust#</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Enquirer</th>
                                <th>Designation</th>
                                <th>Direct Tel</th>
                                <th>Mobile</th>
                                <th>Offical Email 1</th>
                                <th>Offical Email 2</th>
                                <th>Sales person</th>
                                <th>Kick bite</th>
                                <th>KB Commitment</th>
                                <th>Enquiry mode</th>
                                <th>Enquiry period</th>
                                <th>Enquiry reference</th>
                                <th>Product specific name</th>
                                <th>Total qty</th>
                                <th>UOM</th>
                                <th>Enquiry value aed</th>
                                <th>Margin set</th>
                                <th>Incoterm</th>
                                <th>Delivery place</th>
                                <th>Supply term</th>
                                <th>Enquiry conditions</th>
                                <th>Enquiry abstract</th>
                                <th>Period</th>
                                <th>Special instructions</th>
                                <th>RFQ date</th>
                                <th>Quoted date</th>
                                <th>Negotiation date</th>
                                <th>Confirmed Date</th>
                                <th>Dropped Date</th>
                                <th>Lost date</th>
                                <th>Closed date</th>
                                <th>Reasons codes</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="enquiry_datatable">
                            @foreach($data as $row)
                                <?php
                                    $enq_st="";
                                    if($row->enq_status=='1'){ $enq_st= "Active"; }
                                ?>
                                <tr>
                                    <td> <a href='#' id='view_enquiry' data-value="{{$row->enq_id}}"><i class='bx bxs-show'></i></a></td>
                                    <td>EQ{{str_pad($row->enq_id, 6, '0', STR_PAD_LEFT)}}</td>
                                    <td>{{$enq_st}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{$row->age_years}}</td>
                                    <td>{{$row->enq_pri_name}}</td>
                                    <td>{{$row->customer_name}}</td>
                                    <td>{{$row->product_full_name}}</td>
                                    <td>{{$row->focal_points}}</td>
                                    <td>{{$row->custname}}</td>
                                    <td>{{$row->city_name}}</td>
                                    <td>{{$row->state_name}}</td>
                                    <td>{{$row->enquirer_name}}</td>
                                    <td>{{$row->designation}}</td>
                                    <td>{{$row->landline_office}}</td>
                                    <td>{{$row->mobile_no}}</td>
                                    <td>{{$row->contact_email}}</td>
                                    <td>{{$row->contact_email2}}</td>
                                    <td>{{$row->first_name}}</td>
                                    <td>{{$row->Kickback}}</td>
                                    <td>{{$row->kb_commitment}}</td>
                                    <td>{{$row->enquiry_mode}}</td>
                                    <td>{{$row->enquiry_period}}</td>
                                    <td>{{$row->enquiry_reference}}</td>
                                    <td>{{$row->product_specific_name}}</td>
                                    <td>{{$row->total_qty}}</td>
                                    <td>{{$row->uom_name}}</td>
                                    <td>{{$row->enquiry_value_aed}}</td>
                                    <td>{{$row->margin_set}}</td>
                                    <td>{{$row->incoTrname}}</td>
                                    <td>{{$row->delivery_place}}</td>
                                    <td>{{$row->supply_term}}</td>
                                    <td>{{$row->enquiry_conditions}}</td>
                                    <td>{{$row->enquiry_abstract}}</td>
                                    <td>{{$row->enquiry_period}}</td>
                                    <td>{{$row->id}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{date("d/m/20y", strtotime($row->enquiry_date) )}}</td>
                                    <td>{{$row->enquiry_period}}</td>
                                    <td>
                                        <a href='#' id='edit_enquiry' data-value='{{$row->enq_id}}'><i class='bx bxs-edit-alt'></i></a>
                                        <a href='#' id='delete_enquiry' data-value='{{$row->enq_id}}'><i class='bx bxs-trash'></i></a>
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