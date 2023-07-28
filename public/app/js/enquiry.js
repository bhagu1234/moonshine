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
   $.ajax({
      type:'get',
      url:base_path+"/enquiry-create",
      data:{'id':id,'data':data},
      success:function(res){
         $("#create_enquirycontact").append(res);
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