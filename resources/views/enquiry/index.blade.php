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
                                    <td>
                                        <select onchange="EnqStatus({{$row->enq_id}}, this.value,'{{$row->enquiry_date}}')" id="refe_status">
                                            <option <?php if($row->enq_status=="1"){ echo "selected"; } ?> value="1" >Active</option>

                                            <option  <?php if($row->enq_status=="2"){ echo "selected"; } ?> value="2">Quoted</option>

                                            <option  <?php if($row->enq_status=="3"){ echo "selected"; } ?> value="3" >RFQ</option>

                                            <option  <?php if($row->enq_status=="4"){ echo "selected"; } ?> value="4" >Negotiation</option>

                                            <option  <?php if($row->enq_status=="5"){ echo "selected"; } ?> value="5" >Confirmed</option>

                                            <option  <?php if($row->enq_status=="6"){ echo "selected"; } ?> value="6">Dropped</option>

                                            <option  <?php if($row->enq_status=="7"){ echo "selected"; } ?> value="7">Lost</option>

                                            <option  <?php if($row->enq_status=="8"){ echo "selected" ;} ?> value="8" >Closed</option>

                                        </select>
                                    </td>
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
                                    <td></td>
                                    <td>@if($row->rfq_date !="" || $row->rfq_date !=null){{date("d/m/20y", strtotime($row->rfq_date) )}} @endif</td>
                                    <td>@if($row->quoted_date !="" || $row->quoted_date !=null) {{date("d/m/20y", strtotime($row->quoted_date) )}} @endif</td>
                                    <td>@if($row->negotiation_date !="" || $row->negotiation_date !=null) {{date("d/m/20y", strtotime($row->negotiation_date) )}} @endif</td>
                                    <td>@if($row->confirmed_date !="" || $row->confirmed_date !=null) {{date("d/m/20y", strtotime($row->confirmed_date) )}} @endif</td>
                                    <td>@if($row->Dropped_date !="" || $row->Dropped_date !=null) {{date("d/m/20y", strtotime($row->Dropped_date) )}} @endif</td>
                                    <td>@if($row->lost_date !="" || $row->lost_date !=null) {{date("d/m/20y", strtotime($row->lost_date ) )}} @endif</td>
                                    <td> @if($row->closed !="" || $row->closed !=null) {{date("d/m/20y", strtotime($row->closed) )}} @endif</td>
                                    <td>@if($row->enq_status=='6') {{$row->dropp_reason}} @elseif($row->enq_status=='7') {{$row->lost_reason}} @endif</td>
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