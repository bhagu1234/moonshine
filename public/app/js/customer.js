var base_path = $("#url").val();
// view data ==========================================================
$(".close_customerModal").click(function(){
   $("#customerModal").modal("hide");
});
function openCustomerModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/customer",
      success:function(res){
         $("#customer_datatable").html(res);
      }
   });
   $("#customerModal").modal("show");
}


// end view data =====================================================

// start store customer ==================================================
$("#customer_country").html("");
$("#openCreateCustomerModal").click(function(){
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#customer_country").append(res.country);
         $("#CustomerRegion").append(res.region); 
         $("#CustomerType").append(res.addressType);
      }
   });
   $("#createCustomerModal").modal("show");
});
$(".close_openCreateCustomerModal").click(function(){
   $("#createCustomerModal").modal("hide");
});
// addvance details ======================================
$(".advanceCustomer").hide();
$(".addAdvanceCustomer").click(function(){
   $(".advanceCustomer").show();
});
// end advance details ==================================================
function getAddress(id, from)
{
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':from,'id':id},
      success:function(res){
         if(from=="country")
         {
            $("#CustomerState").html("");
            $("#CustomerState").append(res);
         }
         if(from=="state")
         {
            $("#CustomerDistrict").html("");
            $("#CustomerDistrict").append(res);
         }
         if(from=="district")
         {
            $("#CustomerCity").html("");
            $("#CustomerCity").append(res);
         }
        
      }
   });
}
$("#storeCustomer").click(function(){
   var _token=$("#token").val();
   var customer_name=$("#customer_name").val();
   var customerPostBox=$("#customerPostBox").val();
   var customer_groupCos=$("#customer_groupCos").val();
   var customer_address1=$("#customer_address1").val();
   var customer_address2=$("#customer_address2").val();
   var CustomerArea=$("#CustomerArea").val();
   var customerLandMark=$("#customerLandMark").val();
   var customer_country=$("#customer_country").val();
   var CustomerState=$("#CustomerState").val();
   var CustomerDistrict=$("#CustomerDistrict").val();
   var CustomerCity=$("#CustomerCity").val();
   var CustomerRegion=$("#CustomerRegion").val();
   var CustomerType=$("#CustomerType").val();
   var customerPhoneNo=$("#customerPhoneNo").val();
   var customerFax=$("#customerFax").val();
   var customerLocationEmail=$("#customerLocationEmail").val();
   var customerWebsite=$("#customerWebsite").val();
   var customerReferencedBy=$("#customerReferencedBy").val();
   var CustomerTradeActivity=$("#CustomerTradeActivity").val();
   var CustomerFacilityAndLocation=$("#CustomerFacilityAndLocation").val();
   var customerContact=$("#customerContact").val();
   var customerBank=$("#customerBank").val();
   var customerCreditFacility=$("#customerCreditFacility").val();
   var customerVisiteRating=$("#customerVisiteRating").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('customer_name',customer_name);
   formData.append('customerPostBox',customerPostBox);
   formData.append('customer_groupCos',customer_groupCos);
   formData.append('customer_address1',customer_address1);
   formData.append('customer_address2',customer_address2);
   formData.append('CustomerArea',CustomerArea);
   formData.append('customerLandMark',customerLandMark);
   formData.append('customer_country',customer_country);
   formData.append('CustomerState',CustomerState);
   formData.append('CustomerDistrict',CustomerDistrict);
   formData.append('CustomerCity',CustomerCity);
   formData.append('CustomerRegion',CustomerRegion);
   formData.append('CustomerType',CustomerType);
   formData.append('customerPhoneNo',customerPhoneNo);
   formData.append('customerFax',customerFax);
   formData.append('customerLocationEmail',customerLocationEmail);
   formData.append('customerWebsite',customerWebsite);
   formData.append('customerReferencedBy',customerReferencedBy);
   formData.append('CustomerTradeActivity',CustomerTradeActivity);
   formData.append('CustomerFacilityAndLocation',CustomerFacilityAndLocation);
   formData.append('customerContact',customerContact);
   formData.append('customerBank',customerBank);
   formData.append('customerCreditFacility',customerCreditFacility);
   formData.append('customerVisiteRating',customerVisiteRating);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/customer-store",
      success:function(){
         alert("success data stored !");
         openCustomerModel();
         $("#createCustomerModal").modal("hide");

      }
   })
})
// end store customer ===================================================

//start edit customer ===============================================
$("body").on('click','#edit_customer',function(){
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/customer-delete",
      success:function(){
         alert("success data deleted !");
      }
   });
   $("#UpdateCustomerModal").modal("show");
});
$(".close_openUpdateCustomerModal").click(function(){
   $("#UpdateCustomerModal").modal("hide");
});
$("#update_storeCustomer").click(function(){
   var _token=$("#token").val();
   var customer_name=$("#customer_name").val();
   var customerPostBox=$("#customerPostBox").val();
   var customer_groupCos=$("#customer_groupCos").val();
   var customer_address1=$("#customer_address1").val();
   var customer_address2=$("#customer_address2").val();
   var CustomerArea=$("#CustomerArea").val();
   var customerLandMark=$("#customerLandMark").val();
   var customer_country=$("#customer_country").val();
   var CustomerState=$("#CustomerState").val();
   var CustomerDistrict=$("#CustomerDistrict").val();
   var CustomerCity=$("#CustomerCity").val();
   var CustomerRegion=$("#CustomerRegion").val();
   var CustomerType=$("#CustomerType").val();
   var customerPhoneNo=$("#customerPhoneNo").val();
   var customerFax=$("#customerFax").val();
   var customerLocationEmail=$("#customerLocationEmail").val();
   var customerWebsite=$("#customerWebsite").val();
   var customerReferencedBy=$("#customerReferencedBy").val();
   var CustomerTradeActivity=$("#CustomerTradeActivity").val();
   var CustomerFacilityAndLocation=$("#CustomerFacilityAndLocation").val();
   var customerContact=$("#customerContact").val();
   var customerBank=$("#customerBank").val();
   var customerCreditFacility=$("#customerCreditFacility").val();
   var customerVisiteRating=$("#customerVisiteRating").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('customer_name',customer_name);
   formData.append('customerPostBox',customerPostBox);
   formData.append('customer_groupCos',customer_groupCos);
   formData.append('customer_address1',customer_address1);
   formData.append('customer_address2',customer_address2);
   formData.append('CustomerArea',CustomerArea);
   formData.append('customerLandMark',customerLandMark);
   formData.append('customer_country',customer_country);
   formData.append('CustomerState',CustomerState);
   formData.append('CustomerDistrict',CustomerDistrict);
   formData.append('CustomerCity',CustomerCity);
   formData.append('CustomerRegion',CustomerRegion);
   formData.append('CustomerType',CustomerType);
   formData.append('customerPhoneNo',customerPhoneNo);
   formData.append('customerFax',customerFax);
   formData.append('customerLocationEmail',customerLocationEmail);
   formData.append('customerWebsite',customerWebsite);
   formData.append('customerReferencedBy',customerReferencedBy);
   formData.append('CustomerTradeActivity',CustomerTradeActivity);
   formData.append('CustomerFacilityAndLocation',CustomerFacilityAndLocation);
   formData.append('customerContact',customerContact);
   formData.append('customerBank',customerBank);
   formData.append('customerCreditFacility',customerCreditFacility);
   formData.append('customerVisiteRating',customerVisiteRating);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/customer-store",
      success:function(){
         alert("success data Updated !");
         openCustomerModel();
         $("#UpdateCustomerModal").modal("hide");

      }
   })
});
// end edit customer ================================================

// start delete customer ===============================================
$("body").on('click','#delete_customer',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/customer-delete",
         success:function(){
            alert("success data deleted !");
            openCustomerModel();
         }
      });
   }
});
// end delete customer ===================================================