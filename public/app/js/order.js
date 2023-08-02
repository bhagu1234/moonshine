var base_path = $("#url").val();
// start store  ==================================================
$("#openCreateOrderModal").click(function(){
   $("#create_OrderEnquiry").html("");
   $("#create_OrderIncoTerm").html("");
   $.ajax({
        type:'get',
        url:base_path+"/order-create",
        success:function(res){
            $("#create_OrderEnquiry").append(res.enqOpt);
            $("#create_OrderIncoTerm").append(res.incoTrOp);
        }
   });
   $("#createOrderModal").modal("show");
});
$("#createOrderModal").on("shown.bs.modal",function(){
    $(this).hide().show(); 
});
$(".close_openCreateOrderModal").click(function(){
    $("#createOrderModal").modal("hide");
});
$("#storeOrder").click(function(){
    var _token=$("#token").val();
    var create_OrderEnquiry=$("#create_OrderEnquiry").val();
    var create_OrderProducer=$("#create_OrderProducer").val();
    var create_OrderQtyMTe=$("#create_OrderQtyMTe").val();
    var create_OrderValueUS=$("#create_OrderValueUS").val();
    var create_OrderConfRef=$("#create_OrderConfRef").val();
    var create_OrderShipmentDays=$("#create_OrderShipmentDays").val();
    var create_OrderShipMode=$("#create_OrderShipMode").val();
    var create_OrderShipFrom=$("#create_OrderShipFrom").val();
    var create_OrderShipTo=$("#create_OrderShipTo").val();
    var create_OrderPartialShip=$("#create_OrderPartialShip").val();
    var create_OrderTransshipment=$("#create_OrderTransshipment").val();
    var create_OrderDeliverydays=$("#create_OrderDeliverydays").val();
    var create_OrderIncoTerm=$("#create_OrderIncoTerm").val();
    var create_OrderDestination=$("#create_OrderDestination").val();
    var create_OrderComments=$("#create_OrderComments").val();
    var create_OrderBuyerOrderRef=$("#create_OrderBuyerOrderRef").val();
    var create_OrderBuyerOrderDate=$("#create_OrderBuyerOrderDate").val();
    var create_OrderMillSCRef=$("#create_OrderMillSCRef").val();
    var create_OrderMillSCDate=$("#create_OrderMillSCDate").val();
    var create_OrderMonthBooked=$("#create_OrderMonthBooked").val();
    var create_OrderMSBMTSCDate=$("#create_OrderMSBMTSCDate").val();
    // var create_OrderMSBMTSCRef=$("#create_OrderMSBMTSCRef").val();
    var create_OrderRefComments=$("#create_OrderRefComments").val();
    if(create_OrderEnquiry=="" || create_OrderEnquiry==null)
    {
        alert("please select enquiry !!");
        return false;
    }
    if(create_OrderIncoTerm=="" || create_OrderIncoTerm==null)
    {
        alert("please select inco trim !!");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('create_OrderEnquiry',create_OrderEnquiry);
    formData.append('create_OrderProducer',create_OrderProducer);
    formData.append('create_OrderQtyMTe',create_OrderQtyMTe);
    formData.append('create_OrderValueUS',create_OrderValueUS);
    formData.append('create_OrderConfRef',create_OrderConfRef);
    formData.append('create_OrderShipmentDays',create_OrderShipmentDays);
    formData.append('create_OrderShipMode',create_OrderShipMode);
    formData.append('create_OrderShipFrom',create_OrderShipFrom);
    formData.append('create_OrderShipTo',create_OrderShipTo);
    formData.append('create_OrderPartialShip',create_OrderPartialShip);
    formData.append('create_OrderTransshipment',create_OrderTransshipment);
    formData.append('create_OrderDeliverydays',create_OrderDeliverydays);
    formData.append('create_OrderIncoTerm',create_OrderIncoTerm);
    formData.append('create_OrderDestination',create_OrderDestination);
    formData.append('create_OrderComments',create_OrderComments);
    formData.append('create_OrderBuyerOrderRef',create_OrderBuyerOrderRef);
    formData.append('create_OrderBuyerOrderDate',create_OrderBuyerOrderDate);
    formData.append('create_OrderMillSCRef',create_OrderMillSCRef);
    formData.append('create_OrderMillSCDate',create_OrderMillSCDate);
    formData.append('create_OrderMonthBooked',create_OrderMonthBooked);
    formData.append('create_OrderMSBMTSCDate',create_OrderMSBMTSCDate);
    // formData.append('create_OrderMSBMTSCRef',create_OrderMSBMTSCRef);
    formData.append('create_OrderRefComments',create_OrderRefComments);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/order-store",
        success:function(){
            alert("success data stored !");
            location.reload();
            $("#createOrderModal").modal("hide");

        }
    });
});
// end store  ===================================================

// //start edit customer ===============================================
// $("body").on('click','#edit_customer',function(){
//    $("#update_customer_country").html("");
//    $("#update_CustomerRegion").html(""); 
//    $("#update_CustomerType").html("");
//    $("#update_CustomerState").html("");
//    $("#update_CustomerDistrict").html("");
//    $("#update_CustomerCity").html("");
//    $.ajax({
//       type:'get',
//       url:base_path+"/customer-getDetails",
//       data:{'from':'open_form'},
//       success:function(res){
//          $("#update_customer_country").append(res.country);
//          $("#update_CustomerRegion").append(res.region); 
//          $("#update_CustomerType").append(res.addressType);
         
//       }
//    });
//    var id=$(this).attr('data-value');
//    $.ajax({
//       type:'get',
//       data:{'id':id},
//       url:base_path+"/customer-edit",
//       success:function(res){
//          var state=res.state.length;
//          var stOption="";
//          var district=res.district.length;
//          var distrOption="";
//          var city=res.city.length;
//          var cityOption="";
//          for(var i=0;state>i;i++)
//          {
//             var state_id=res.state[i].state_id;
//             var state_name=res.state[i].name;
//             console.log(state_id + "," + state_name);
//             stOption+="<option  value="+state_id+">"+state_name+"</option>";
            
//          }
//          $("#update_CustomerState").append(stOption);
//          for(var i=0;district>i;i++)
//          {
//             var district_id=res.district[i].district_id;
//             var district_name=res.district[i].district_name;
//             distrOption+="<option  value="+district_id+">"+district_name+"</option>";
            
//          }
//          $("#update_CustomerDistrict").append(distrOption);
//          for(var i=0;city>i;i++)
//          {
//             var city_id=res.city[i].city_id;
//             var city_name=res.city[i].city_name;
//             cityOption+="<option  value="+city_id+">"+city_name+"</option>";
            
//          }
//          $("#update_CustomerCity").append(cityOption);
//          $("#customer_id").val(res.allData.id);
//          $("#update_customer_name").val(res.allData.customer_name);
//          $("#update_customerPostBox").val(res.allData.postbox);
//          $("#update_customer_groupCos").val(res.allData.group_cos);
//          $("#update_customer_address1").val(res.allData.address1);
//          $("#update_customer_address2").val(res.allData.address2);
//          $("#update_CustomerArea").val(res.allData.area);
//          $("#update_customerLandMark").val(res.allData.landmark);
//          $("#update_customer_country").val(res.allData.country);
//          $("#update_CustomerState").val(res.allData.state);
//          $("#update_CustomerDistrict").val(res.allData.district);
//          $("#update_CustomerCity").val(res.allData.city);
//          $("#update_CustomerRegion").val(res.allData.region);
//          $("#update_CustomerType").val(res.allData.address_type);
//          $("#update_customerPhoneNo").val(res.allData.phone_no);
//          $("#update_customerFax").val(res.allData.fax);
//          $("#update_customerLocationEmail").val(res.allData.location_email);
//          $("#update_customerWebsite").val(res.allData.website);
//          $("#update_customerReferencedBy").val(res.allData.refere_by);
//          $("#update_CustomerTradeActivity").val(res.allData.trade_activity);
//          $("#update_CustomerFacilityAndLocation").val(res.allData.facility_location);
//          $("#update_customerContact").val(res.allData.customer_contact);
//          $("#update_customerBank").val(res.allData.bank_id);
//          $("#update_customerCreditFacility").val(res.allData.credit_facility);
//          $("#update_customerVisiteRating").val(res.allData.visite_rating);
//          // if($("#update_customer_country").val() !="")
//          //    {
//          //       var id=$("#update_customer_country").find(":selected").val();
//          //       var from="country";
//          //       getAddress(id,from);
//          //    }
           
//       }
//    });
//    $("#UpdateCustomerModal").modal("show");
// });
// $('#UpdateCustomerModal').on('hidden.bs.modal', function () {
//    $(this).find('form').trigger('reset');
// });
// $(".close_openUpdateCustomerModal").click(function(){
//    $("#UpdateCustomerModal").modal("hide");
// });
// $("#update_storeCustomer").click(function(){
//    var _token=$("#token").val();
//    var id=$("#customer_id").val();
//    var customer_name=$("#update_customer_name").val();
//    var customerPostBox=$("#update_customerPostBox").val();
//    var customer_groupCos=$("#update_customer_groupCos").val();
//    var customer_address1=$("#update_customer_address1").val();
//    var customer_address2=$("#update_customer_address2").val();
//    var CustomerArea=$("#update_CustomerArea").val();
//    var customerLandMark=$("#update_customerLandMark").val();
//    var customer_country=$("#update_customer_country").val();
//    var CustomerState=$("#update_CustomerState").val();
//    var CustomerDistrict=$("#update_CustomerDistrict").val();
//    var CustomerCity=$("#update_CustomerCity").val();
//    var CustomerRegion=$("#update_CustomerRegion").val();
//    var CustomerType=$("#update_CustomerType").val();
//    var customerPhoneNo=$("#update_customerPhoneNo").val();
//    var customerFax=$("#update_customerFax").val();
//    var customerLocationEmail=$("#update_customerLocationEmail").val();
//    var customerWebsite=$("#update_customerWebsite").val();
//    var customerReferencedBy=$("#update_customerReferencedBy").val();
//    var CustomerTradeActivity=$("#update_CustomerTradeActivity").val();
//    var CustomerFacilityAndLocation=$("#update_CustomerFacilityAndLocation").val();
//    var customerContact=$("#update_customerContact").val();
//    var customerBank=$("#update_customerBank").val();
//    var customerCreditFacility=$("#update_customerCreditFacility").val();
//    var customerVisiteRating=$("#update_customerVisiteRating").val();
//    var formData=new FormData();
//    formData.append('_token',_token);
//    formData.append('customer_name',customer_name);
//    formData.append('customerPostBox',customerPostBox);
//    formData.append('customer_groupCos',customer_groupCos);
//    formData.append('customer_address1',customer_address1);
//    formData.append('customer_address2',customer_address2);
//    formData.append('CustomerArea',CustomerArea);
//    formData.append('customerLandMark',customerLandMark);
//    formData.append('customer_country',customer_country);
//    formData.append('CustomerState',CustomerState);
//    formData.append('CustomerDistrict',CustomerDistrict);
//    formData.append('CustomerCity',CustomerCity);
//    formData.append('CustomerRegion',CustomerRegion);
//    formData.append('CustomerType',CustomerType);
//    formData.append('customerPhoneNo',customerPhoneNo);
//    formData.append('customerFax',customerFax);
//    formData.append('customerLocationEmail',customerLocationEmail);
//    formData.append('customerWebsite',customerWebsite);
//    formData.append('customerReferencedBy',customerReferencedBy);
//    formData.append('CustomerTradeActivity',CustomerTradeActivity);
//    formData.append('CustomerFacilityAndLocation',CustomerFacilityAndLocation);
//    formData.append('customerContact',customerContact);
//    formData.append('customerBank',customerBank);
//    formData.append('customerCreditFacility',customerCreditFacility);
//    formData.append('customerVisiteRating',customerVisiteRating);
//    formData.append('id',id);
//    $.ajax({
//       type:'POST',
//       processData: false,
//       contentType: false,
//       cache: false,
//       async: false,
//       data:formData,
//       url:base_path+"/customer-update",
//       success:function(){
//          alert("success data Updated !");
//          openCustomerModel();
//          $("#UpdateCustomerModal").modal("hide");

//       }
//    });
// });
// // end edit customer ================================================

// start view data ==================================================
$("body").on('click','#view_orderdata',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        data:{'id':id},
        url:base_path+"/order-view",
        success:function(res){
            var str = "" + res.order_details.enquiry_id
            var ms = "" + res.order_details.id
            var pad = "00000"
            var ans = pad.substring(0, pad.length - str.length) + str;
            var msbt = pad.substring(0, pad.length - ms.length) + ms;
            var Buydate = new Date(res.order_details.buyer_order_date+'T00:00:00+05:30');
            var buyerDate=((Buydate.getMonth() > 8) ? (Buydate.getMonth() + 1) : ('0' + (Buydate.getMonth() + 1))) + '/' + ((Buydate.getDate() > 9) ? Buydate.getDate() : ('0' + Buydate.getDate())) + '/' + Buydate.getFullYear();

            var mdate = new Date(res.order_details.mill_p_inv_sc_date+'T00:00:00+05:30');
            var millDate=((mdate.getMonth() > 8) ? (mdate.getMonth() + 1) : ('0' + (mdate.getMonth() + 1))) + '/' + ((mdate.getDate() > 9) ? mdate.getDate() : ('0' + mdate.getDate())) + '/' + mdate.getFullYear();

            var msDate = new Date(res.order_details.msbmt_sc_date+'T00:00:00+05:30');
            msbtDate=((msDate.getMonth() > 8) ? (msDate.getMonth() + 1) : ('0' + (msDate.getMonth() + 1))) + '/' + ((msDate.getDate() > 9) ? msDate.getDate() : ('0' + msDate.getDate())) + '/' + msDate.getFullYear();
            $("#orderView_enq_no").text("EQ"+ans);
            $("#order_viewCustomername").text(res.order_details.customer_name);
            $("#orderView_exportername").text("");
            $("#orderView_orStatus").text("");
            $("#orderView_masterCat").text(res.order_details.category_name);
            $("#orderViewCommodityQty").text(res.order_details.order_qty_mt);
            $("#orderViewfferDate").text("");
            $("#orderViewProducer").text(res.order_details.producer);
            $("#orderViewQtyMt").text(res.order_details.order_qty_mt);
            $("#orderViewValueUs").text("$"+res.order_details.order_value_us);
            $("#orderViewConfRef").text(res.order_details.order_conf_ref);
            $("#orderViewShipmentDays").text(res.order_details.shipment_days);
            $("#orderViewShipMode").text(res.order_details.ship_mode);
            $("#orderViewShipFrom").text(res.order_details.ship_from);
            $("#orderViewShipTo").text(res.order_details.ship_to);
            $("#orderViewPartialShip").text(res.order_details.partial_ship);
            $("#orderViewTransshipment").text(res.order_details.Trans_shipment);
            $("#orderViewDeliverydays").text(res.order_details.delivery_days);
            $("#orderViewIncoTerm").text(res.order_details.incoTrname);
            $("#orderViewDestination").text(res.order_details.destination);
            $("#orderViewComments").text(res.order_details.comment);
            $("#orderViewMSBMT_SC_Ref").text("SO-"+msbt);
            $("#orderViewBuyerOrderRef").text(res.order_details.buyer_order_ref);
            $("#orderViewBuyerOrderDate").text(buyerDate);
            $("#orderViewMill_Ref").text(res.order_details.mill_p_inv_sc_ref);
            $("#orderViewMill_Date").text(millDate);
            $("#orderViewMonthBooked").text(res.order_details.month_booked);
            $("#orderViewMSBMT_Date").text(msbtDate);
            $("#orderViewRefComments").text(res.order_details.order_reference_comment);
           
        }
    });
    $("#OrderDetailsviewModal").modal("show");
});
$(".close_orderDetailsModalview").click(function(){
   $("#OrderDetailsviewModal").modal("hide");
});

// end view data ====================================================

// // start delete customer ===============================================
// $("body").on('click','#delete_customer',function(){
//    var id=$(this).attr('data-value');
//    if (confirm('Are you sure you want to delete this?')) 
//    {
//       $.ajax({
//          type:'get',
//          data:{'id':id},
//          url:base_path+"/customer-delete",
//          success:function(){
//             alert("success data deleted !");
//             openCustomerModel();
//          }
//       });
//    }
// });
// // end delete customer ===================================================