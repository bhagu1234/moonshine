var base_path = $("#url").val();
// start store customer ==================================================

$("#openCreateEnquiryModal").click(function(){
   $("#create_enquiryCustomer").html("");
   $("#create_enquiryProduct").html("");
   $("#create_enquiryEnquiryPrioprity").html("");
   $("#create_enquiryEnquiryfocalPoint").html("");
   $("#create_enquiryEnquiryInfoTerms").html("");
   $("#create_enquiryUom").html("");
   $.ajax({
      type:'get',
      url:base_path+"/enquiry-create",
      data:{'data':'open_form'},
      success:function(res){
         $("#create_enquiryCustomer").append(res.customer_option);
         $("#create_enquiryProduct").append(res.product_option);
         $("#create_enquiryEnquiryPrioprity").append(res.enquiryPr_option);
         $("#create_enquiryEnquiryfocalPoint").append(res.focalPoint_option);
         $("#create_enquiryEnquiryInfoTerms").append(res.incoterm_option);
         $("#create_enquiryUom").append(res.uom_option);
      }
   });
   $("#createEnquiryModal").modal("show");
});
function customerContact(id ,data)
{
   $("#create_enquirycontact").html("");
   $("#update_enquirycontact").html("");
   $.ajax({
      type:'get',
      url:base_path+"/enquiry-create",
      data:{'id':id,'data':data},
      success:function(res){
         $("#create_enquirycontact").append(res);
         $("#update_enquirycontact").append(res);
      }
   })
}
$("#createEnquiryModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
   });

$(".close_opencreateEnquiryModal").click(function(){
   $("#createEnquiryModal").modal("hide");
});
$('#createEnquiryModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$("#storeEnquiry").click(function(){
   var _token=$("#token").val();
   var create_enquiryCustomer=$("#create_enquiryCustomer").val();
   var create_enquirycontact=$("#create_enquirycontact").val();
   var create_enquiryProduct=$("#create_enquiryProduct").val();
   var create_enquiryUom=$("#create_enquiryUom").val();
   var create_enquiryTotalQty=$("#create_enquiryTotalQty").val();
   var create_enquiryEnquiryValueAED=$("#create_enquiryEnquiryValueAED").val();
   var create_enquiryMarginSet=$("#create_enquiryMarginSet").val();
   var create_enquiryenquiryDate=$("#create_enquiryenquiryDate").val();
   var create_enquiryEnquiryPrioprity=$("#create_enquiryEnquiryPrioprity").val();
   var create_enquiryEnquiryfocalPoint=$("#create_enquiryEnquiryfocalPoint").val();
   var create_enquiryKbCommitment=$("#create_enquiryKbCommitment").val();
   var create_enquiryEnquiryMode=$("#create_enquiryEnquiryMode").val();
   var create_enquiryPeriod=$("#create_enquiryPeriod").val();
   var create_enquiryItems=$("#create_enquiryItems").val();
   var create_enquiryEnquiryInfoTerms=$("#create_enquiryEnquiryInfoTerms").val();
   var create_enquirySupplyTerm=$("#create_enquirySupplyTerm").val();
   var create_enquiryDeliveryPlace=$("#create_enquiryDeliveryPlace").val();
   var create_EnquiryReference=$("#create_EnquiryReference").val();
   var create_EnquiryConditions=$("#create_EnquiryConditions").val();
   var create_EnquiryAbstract=$("#create_EnquiryAbstract").val();
   if(create_enquiryCustomer=="" || create_enquiryCustomer==null)
   {
      alert("please select customer !");
      return false;
   }
   if(create_enquirycontact=="" || create_enquirycontact ==null)
   {
      alert("please select contact !");
      return false;
   }
   if(create_enquiryProduct=="" || create_enquiryProduct==null)
   {
      alert("please select product !");
      return false;
   }
   if(create_enquiryUom=="" || create_enquiryUom==null)
   {
      alert("please select uom !");
      return false;
   }
   if(create_enquiryEnquiryfocalPoint=="" || create_enquiryEnquiryfocalPoint==null)
   {
      alert("please select focal point !");
      return false;
   }
   if(create_enquiryEnquiryInfoTerms=="" || create_enquiryEnquiryInfoTerms==null)
   {
      alert("please select  incotrim !");
      return false;
   }
   if(create_enquiryEnquiryPrioprity=="" ||create_enquiryEnquiryPrioprity==null)
   {
      alert("please select enquiry prioprity !");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('create_enquiryCustomer',create_enquiryCustomer);
   formData.append('create_enquirycontact',create_enquirycontact);
   formData.append('create_enquiryProduct',create_enquiryProduct);
   formData.append('create_enquiryUom',create_enquiryUom);
   formData.append('create_enquiryTotalQty',create_enquiryTotalQty);
   formData.append('create_enquiryEnquiryValueAED',create_enquiryEnquiryValueAED);
   formData.append('create_enquiryMarginSet',create_enquiryMarginSet);
   formData.append('create_enquiryenquiryDate',create_enquiryenquiryDate);
   formData.append('create_enquiryEnquiryPrioprity',create_enquiryEnquiryPrioprity);
   formData.append('create_enquiryEnquiryfocalPoint',create_enquiryEnquiryfocalPoint);
   formData.append('create_enquiryKbCommitment',create_enquiryKbCommitment);
   formData.append('create_enquiryEnquiryMode',create_enquiryEnquiryMode);
   formData.append('create_enquiryPeriod',create_enquiryPeriod);
   formData.append('create_enquiryItems',create_enquiryItems);
   formData.append('create_enquiryEnquiryInfoTerms',create_enquiryEnquiryInfoTerms);
   formData.append('create_enquirySupplyTerm',create_enquirySupplyTerm);
   formData.append('create_enquiryDeliveryPlace',create_enquiryDeliveryPlace);
   formData.append('create_EnquiryReference',create_EnquiryReference);
   formData.append('create_EnquiryConditions',create_EnquiryConditions);
   formData.append('create_EnquiryAbstract',create_EnquiryAbstract);
   
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/enquiry-store",
      success:function(){
         alert("success data stored !");
        location.reload();
         $("#createEnquiryModal").modal("hide");

      }
   })
})
// end store customer ===================================================

//start edit customer ===============================================
$("body").on('click','#edit_enquiry',function(){
   $("#update_enquiryCustomer").html("");
   $("#update_enquiryProduct").html("");
   $("#update_enquiryEnquiryPrioprity").html("");
   $("#update_enquiryEnquiryfocalPoint").html("");
   $("#update_enquiryEnquiryInfoTerms").html("");
   $("#update_enquiryUom").html("");
   $.ajax({
      type:'get',
      url:base_path+"/enquiry-create",
      data:{'data':'open_form'},
      success:function(res){
         $("#update_enquiryCustomer").append(res.customer_option);
         $("#update_enquiryProduct").append(res.product_option);
         $("#update_enquiryEnquiryPrioprity").append(res.enquiryPr_option);
         $("#update_enquiryEnquiryfocalPoint").append(res.focalPoint_option);
         $("#update_enquiryEnquiryInfoTerms").append(res.incoterm_option);
         $("#update_enquiryUom").append(res.uom_option);
      }
   });
   $("#update_enquirycontact").html("");
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/enquiry-edit",
      success:function(res){
         var contLength=res.contact.length;
         var conOp="";
         for(var i=0;i<contLength;i++)
         {
            var id=res.contact[i].id;
            var name=res.contact[i].first_name;
            conOp+="<option value="+id+">"+name+"</option>";
         }
         $("#update_enquirycontact").append(conOp);
         $("#update_enq_id").val(res.data.id);
         $("#update_enquiryCustomer").val(res.data.customer_id);
         $("#update_enquirycontact").val(res.data.contact_id);
         $("#update_enquiryProduct").val(res.data.product_id);
         $("#update_enquiryUom").val(res.data.uom_id);
         $("#update_enquiryTotalQty").val(res.data.total_qty);
         $("#update_enquiryEnquiryValueAED").val(res.data.enquiry_value_aed);
         $("#update_enquiryMarginSet").val(res.data.margin_set);
         $("#update_enquiryenquiryDate").val(res.data.enquiry_date);
         $("#update_enquiryEnquiryPrioprity").val(res.data.enquiry_priority_id);
         $("#update_enquiryEnquiryfocalPoint").val(res.data.enquiry_focal_points_id);
         $("#update_enquiryKbCommitment").val(res.data.kb_commitment);
         $("#update_enquiryEnquiryMode").val(res.data.enquiry_mode);
         $("#update_enquiryPeriod").val(res.data.enquiry_period);
         $("#update_enquiryItems").val(res.data.enquired_item);
         $("#update_enquiryEnquiryInfoTerms").val(res.data.inco_term_id);
         $("#update_enquirySupplyTerm").val(res.data.supply_term);
         $("#update_enquiryDeliveryPlace").val(res.data.delivery_place);
         $("#update_EnquiryReference").val(res.data.enquiry_reference);
         $("#update_EnquiryConditions").val(res.data.enquiry_conditions);
         $("#update_EnquiryAbstract").val(res.data.enquiry_abstract);
      }
   });
   $("#updateEnquiryModal").modal("show");
});
$('#updateEnquiryModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openupdateEnquiryModal").click(function(){
   $("#updateEnquiryModal").modal("hide");
});
$("#updateEnquiry").click(function(){
   var _token=$("#token").val();
   var id=$("#update_enq_id").val();
   var create_enquiryCustomer=$("#update_enquiryCustomer").val();
   var create_enquirycontact=$("#update_enquirycontact").val();
   var create_enquiryProduct=$("#update_enquiryProduct").val();
   var create_enquiryUom=$("#update_enquiryUom").val();
   var create_enquiryTotalQty=$("#update_enquiryTotalQty").val();
   var create_enquiryEnquiryValueAED=$("#update_enquiryEnquiryValueAED").val();
   var create_enquiryMarginSet=$("#update_enquiryMarginSet").val();
   var create_enquiryenquiryDate=$("#update_enquiryenquiryDate").val();
   var create_enquiryEnquiryPrioprity=$("#update_enquiryEnquiryPrioprity").val();
   var create_enquiryEnquiryfocalPoint=$("#update_enquiryEnquiryfocalPoint").val();
   var create_enquiryKbCommitment=$("#update_enquiryKbCommitment").val();
   var create_enquiryEnquiryMode=$("#update_enquiryEnquiryMode").val();
   var create_enquiryPeriod=$("#update_enquiryPeriod").val();
   var create_enquiryItems=$("#update_enquiryItems").val();
   var create_enquiryEnquiryInfoTerms=$("#update_enquiryEnquiryInfoTerms").val();
   var create_enquirySupplyTerm=$("#update_enquirySupplyTerm").val();
   var create_enquiryDeliveryPlace=$("#update_enquiryDeliveryPlace").val();
   var create_EnquiryReference=$("#update_EnquiryReference").val();
   var create_EnquiryConditions=$("#update_EnquiryConditions").val();
   var create_EnquiryAbstract=$("#update_EnquiryAbstract").val();
   if(create_enquiryCustomer=="" || create_enquiryCustomer==null)
   {
      alert("please select customer !");
      return false;
   }
   if(create_enquirycontact=="" || create_enquirycontact ==null)
   {
      alert("please select contact !");
      return false;
   }
   if(create_enquiryProduct=="" || create_enquiryProduct==null)
   {
      alert("please select product !");
      return false;
   }
   if(create_enquiryUom=="" || create_enquiryUom==null)
   {
      alert("please select uom !");
      return false;
   }
   if(create_enquiryEnquiryfocalPoint=="" || create_enquiryEnquiryfocalPoint==null)
   {
      alert("please select focal point !");
      return false;
   }
   if(create_enquiryEnquiryInfoTerms=="" || create_enquiryEnquiryInfoTerms==null)
   {
      alert("please select  incotrim !");
      return false;
   }
   if(create_enquiryEnquiryPrioprity=="" ||create_enquiryEnquiryPrioprity==null)
   {
      alert("please select enquiry prioprity !");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('create_enquiryCustomer',create_enquiryCustomer);
   formData.append('create_enquirycontact',create_enquirycontact);
   formData.append('create_enquiryProduct',create_enquiryProduct);
   formData.append('create_enquiryUom',create_enquiryUom);
   formData.append('create_enquiryTotalQty',create_enquiryTotalQty);
   formData.append('create_enquiryEnquiryValueAED',create_enquiryEnquiryValueAED);
   formData.append('create_enquiryMarginSet',create_enquiryMarginSet);
   formData.append('create_enquiryenquiryDate',create_enquiryenquiryDate);
   formData.append('create_enquiryEnquiryPrioprity',create_enquiryEnquiryPrioprity);
   formData.append('create_enquiryEnquiryfocalPoint',create_enquiryEnquiryfocalPoint);
   formData.append('create_enquiryKbCommitment',create_enquiryKbCommitment);
   formData.append('create_enquiryEnquiryMode',create_enquiryEnquiryMode);
   formData.append('create_enquiryPeriod',create_enquiryPeriod);
   formData.append('create_enquiryItems',create_enquiryItems);
   formData.append('create_enquiryEnquiryInfoTerms',create_enquiryEnquiryInfoTerms);
   formData.append('create_enquirySupplyTerm',create_enquirySupplyTerm);
   formData.append('create_enquiryDeliveryPlace',create_enquiryDeliveryPlace);
   formData.append('create_EnquiryReference',create_EnquiryReference);
   formData.append('create_EnquiryConditions',create_EnquiryConditions);
   formData.append('create_EnquiryAbstract',create_EnquiryAbstract);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/enquiry-update",
      success:function(){
         alert("success data updated !");
         location.reload();
         $("#updateEnquiryModal").modal("hide");

      }
   })
});
// end edit customer ================================================

// start view data ==================================================
$("body").on('click','#view_enquiry',function(){
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/enquiry-view",
      success:function(res){
         var str = "" + res.enquiry_details.enq_id
         var pad = "00000"
         var ans = pad.substring(0, pad.length - str.length) + str;
         var date = new Date(res.enquiry_details.enquiry_date+'T00:00:00+05:30');
        var enquiry_date=((date.getMonth() > 8) ? (date.getMonth() + 1) : ('0' + (date.getMonth() + 1))) + '/' + ((date.getDate() > 9) ? date.getDate() : ('0' + date.getDate())) + '/' + date.getFullYear();
        var enq_status=res.enquiry_details.enq_status;
         if(enq_status=='1')
         {
            enq_status="Active";
         }
         else if(enq_status=='2')
         {
            enq_status="Quoted";
         }
         else if(enq_status=='3')
         {
            enq_status="RFQ";
         }
         else if(enq_status=='4')
         {
            enq_status="Negotiation";
         }
         else if(enq_status=='5')
         {
            enq_status="Confirmed";
         }
         else if(enq_status=='6')
         {
            enq_status="Dropped";
         }
         else if(enq_status=='7')
         {
            enq_status="Lost";
         }
         else if(enq_status=='8')
         {
            enq_status="Closed";
         }
         $("#view_EnquiryNumber").text("EQ"+ans);
         $("#viewEnquiryDate").text(enquiry_date);
         $("#view_enquiryOldByDays").text("");
         $("#viewEnquiryStatus").text(enq_status);
         $("#viewEnquiryPriority").text(res.enquiry_details.enq_pri_name);
         $("#viewEnqCustomerName").text(res.enquiry_details.customer_name);
         $("#viewEnqKbCommitment").text(res.enquiry_details.kb_commitment);
         $("#viewEnqEnquiryMode").text(res.enquiry_details.enquiry_mode);
         $("#viewEnqEnquiryPeriod").text(res.enquiry_details.enquiry_period);
         $("#viewEnqIncoTrim").text(res.enquiry_details.incoTrname);
         $("#viewEnqSupplyTerm").text(res.enquiry_details.supply_term);
         $("#viewEnqDeliveryPlace").text(res.enquiry_details.delivery_place);
         $("#viewEnqEnquiryReference").text(res.enquiry_details.enquiry_reference);
         $("#viewEnqEnquiryConditions").text(res.enquiry_details.enquiry_conditions);
         $("#viewEnqEnquiryAbstracts").text(res.enquiry_details.enquiry_abstract);
         $("#viewEnqProductSpecific").text(res.enquiry_details.product_specific_name);
         $("#viewEnqTotalQty").text(res.enquiry_details.total_qty);
         $("#viewEnqUOM").text(res.enquiry_details.uom_name);
         $("#viewEnqValueAed").text(res.enquiry_details.enquiry_value_aed);
         $("#viewEnqMarginSet").text(res.enquiry_details.margin_set);
         $("#viewEnqProductCategory").text(res.enquiry_details.category_name);
         $("#viewEnqBaseProduct").text(res.enquiry_details.baseProductName);
         $("#viewEnqSubProduct").text(res.enquiry_details.subProductName);
         $("#viewEnqCustomerNumber").text(res.enquiry_details.phone_no);
         $("#viewEnqCityState").text(res.enquiry_details.state_name+ " & " +res.enquiry_details.city_name);
         $("#viewEnqEnquirer").text(res.enquiry_details.first_name + " " + res.enquiry_details.middle_name + " " + res.enquiry_details.last_name);
         $("#viewEnqDesignation").text(res.enquiry_details.designation);
         // $("#pro_priceStrucVIew").text(res.enquiry_details.enq_id);
         $("#viewEnqDirectTel").text(res.enquiry_details.landline_office);
         $("#viewEnqMobileNumber").text(res.enquiry_details.mobile_no);
         $("#viewEnqOfficialMail1").text(res.enquiry_details.contact_email);
         $("#viewEnqOfficialMail2").text(res.enquiry_details.contact_email2);
         $("#viewEnqSalesPerson").text(res.enquiry_details.focal_points);
         $("#viewEnqKickBite").text(res.enquiry_details.Kickback);
      }
   });
  
   $("#EnquiryDetailsviewModal").modal("show");
});
$(".close_EnquiryModalview").click(function(){
   $("#EnquiryDetailsviewModal").modal("hide");
});

// end view data ====================================================

// start delete customer ===============================================
$("body").on('click','#delete_enquiry',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/enquiry-delete",
         success:function(){
            alert("success data deleted !");
           location.reload();
         }
      });
   }
});
// end delete enquiry ===================================================

// update enq status ============================================
function EnqStatus(id,status,enq_date)
{
   $("#check_enqstatus").val(status);
   $("#update_status_id").val(id);
   $("#update_status_enq_date").val(enq_date);
   $(".Dropped").hide();
   if(status=='1')
   {
      $("#status_label_name").text("Active");
   }
   else if(status=='2')
   {
      $("#status_label_name").text("Quoted");
   }
   else if(status=='3')
   {
      $("#status_label_name").text("RFQ");
   }
   
   else if(status=='4')
   {
      $("#status_label_name").text("Negotiation");
   }   
   else if(status=='5')
   {
      $("#status_label_name").text("Confirmed");
   }
   else if(status=='6')
   {
      $("#status_label_name").text("Dropped");
      $(".Dropped").show();
   }
   else if(status=='7')
   {
      $("#status_label_name").text("Lost");
      $(".Dropped").show();
   }
   else if(status=='8')
   {
      $("#status_label_name").text("Closed");
   }
   
   $("#update_enquiryEnquiryDroppedReasonStatus").html("");
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/enquiry-get_reason",
      success:function(res){
         var optio="<option selected disabled>select</option>";
         var droppOp=optio;
         var lostOp=optio;
         var data_length=res.length;
         for(var i=0; i<data_length; i++)
         {
            var id=res[i].id;
            var droppReason=res[i].dropp_reason;
            var lostReason=res[i].lost_reason;
            if(droppReason !="" || droppReason !=null)
            {
               droppOp+="<option value="+id+">"+droppReason+"</option>";
            }
            if(droppReason !="" || droppReason !=null)
            {
               lostOp+="<option value="+id+">"+lostReason+"</option>";
            }
         }
         if(status=='6')
         {
            $("#update_enquiryEnquiryDroppedReasonStatus").append(droppOp);
         }
         if(status=='7')
         {
            $("#update_enquiryEnquiryDroppedReasonStatus").append(lostOp);
         }
        
      }
   });
  $("#updateEnquiryStatusModal").modal("show");
}
$('#updateEnquiryStatusModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openupdateEnquiryStatusModal").click(function(){
   location.reload(true);
   $("#updateEnquiryStatusModal").modal("hide");
});
$("#updateEnquiryStatus").click(function(){
   var _token=$("#token").val();
  var status= $("#check_enqstatus").val();
   var id =$("#update_status_id").val();
   var changed_date=$("#update_enquiryEnquiryActiveStatus").val();
   var enq_date=$("#update_status_enq_date").val();
   var reason=$("#update_enquiryEnquiryDroppedReasonStatus").val();
   if(changed_date=="" || changed_date==null)
   {
      alert("please Fill the status date"); 
      return false;
   }
   if(new Date(changed_date) < new Date(enq_date))
   {
      alert("Confirmed date should be greater than Enquiry date");
      return false;
   }
   if(status=='6' || status=='7')
   {
      if(reason =="" || reason==null)
      {
         alert("please select reason !");
         return false;
      }
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('status',status);
   formData.append('changed_date',changed_date);
   formData.append('reason',reason);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/enquiry-status_update",
      success:function(){
         alert("success Status updated !");
         location.reload();
         $("#updateEnquiryStatusModal").modal("hide");

      }
   })
});
// end updated enq status ========================================