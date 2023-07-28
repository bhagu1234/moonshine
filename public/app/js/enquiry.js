var base_path = $("#url").val();
// list data ==========================================================
$(".close_enquiryModal").click(function(){
   $("#enquiryModal").modal("hide");
});
function openEnquiryModel()
{
    $("#enquiry_datatable").html("");
    $.ajax({
      type:'get',
      url:base_path+"/enquiry",
      success:function(res){
         $("#enquiry_datatable").append(res);
      }
   });
   $("#enquiryModal").modal("show");
}


// end list data =====================================================

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
   if(create_enquiryCustomer=="")
   {
      alert("please select customer !");
      return false;
   }
   if(create_enquirycontact=="")
   {
      alert("please select contact !");
      return false;
   }
   if(create_enquiryProduct=="")
   {
      alert("please select product !");
      return false;
   }
   if(create_enquiryUom=="")
   {
      alert("please select uom !");
      return false;
   }
   if(create_enquiryEnquiryfocalPoint=="")
   {
      alert("please select focal point !");
      return false;
   }
   if(create_enquiryEnquiryInfoTerms=="")
   {
      alert("please select  incotrim !");
      return false;
   }
   if(create_enquiryEnquiryPrioprity=="")
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
         openEnquiryModel();
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
         $("#update_enq_id").val(res.response.id);
         $("#update_enquiryCustomer").val(res.response.customer_id);
         $("#update_enquirycontact").val(res.response.contact_id);
         $("#update_enquiryProduct").val(res.response.product_id);
         $("#update_enquiryUom").val(res.response.uom_id);
         $("#update_enquiryTotalQty").val(res.response.total_qty);
         $("#update_enquiryEnquiryValueAED").val(res.response.enquiry_value_aed);
         $("#update_enquiryMarginSet").val(res.response.margin_set);
         $("#update_enquiryenquiryDate").val(res.response.enquiry_date);
         $("#update_enquiryEnquiryPrioprity").val(res.response.enquiry_priority_id);
         $("#update_enquiryEnquiryfocalPoint").val(res.response.enquiry_focal_points_id);
         $("#update_enquiryKbCommitment").val(res.response.kb_commitment);
         $("#update_enquiryEnquiryMode").val(res.response.enquiry_mode);
         $("#update_enquiryPeriod").val(res.response.enquiry_period);
         $("#update_enquiryItems").val(res.response.enquired_item);
         $("#update_enquiryEnquiryInfoTerms").val(res.response.inco_term_id);
         $("#update_enquirySupplyTerm").val(res.response.supply_term);
         $("#update_enquiryDeliveryPlace").val(res.response.delivery_place);
         $("#update_EnquiryReference").val(res.response.enquiry_reference);
         $("#update_EnquiryConditions").val(res.response.enquiry_conditions);
         $("#update_EnquiryAbstract").val(res.response.enquiry_abstract);
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
   if(create_enquiryCustomer=="")
   {
      alert("please select customer !");
      return false;
   }
   if(create_enquirycontact=="")
   {
      alert("please select contact !");
      return false;
   }
   if(create_enquiryProduct=="")
   {
      alert("please select product !");
      return false;
   }
   if(create_enquiryUom=="")
   {
      alert("please select uom !");
      return false;
   }
   if(create_enquiryEnquiryfocalPoint=="")
   {
      alert("please select focal point !");
      return false;
   }
   if(create_enquiryEnquiryInfoTerms=="")
   {
      alert("please select  incotrim !");
      return false;
   }
   if(create_enquiryEnquiryPrioprity=="")
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
         alert("success data stored !");
         openEnquiryModel();
         $("#updateEnquiryModal").modal("hide");

      }
   })
});
// end edit customer ================================================

// // start view data ==================================================
// $("body").on('click','.view_customer',function(){
//    var id=$(this).attr('data-value');
//    $.ajax({
//       type:'get',
//       data:{'id':id},
//       url:base_path+"/customer-view",
//       success:function(res){
//          $(".customer_name_view").text(res.customer_name);
//          $(".group_cos_view").text(res.group_cos);
//          $(".address1_view").text(res.address1);
//          $(".address2_view").text(res.address2);
//          $(".location_email_view").text(res.location_email);
//       }
//    });
  
//    $("#customerDetailsviewModal").modal("show");
// });
// $(".close_customerModalview").click(function(){
//    $("#customerDetailsviewModal").modal("hide");
// });

// // end view data ====================================================

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