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
$("#openCreateCustomerModal").click(function(){
   $("#createCustomerModal").modal("show");
});
$(".close_openCreateCustomerModal").click(function(){
   $("#createCustomerModal").modal("hide");
});
$("#advanceCustomer").hide();
$("#addAdvanceCustomer").click(function(){
   alert("Dfdsfdsfdsf");
   $("#customer_country").html("");
   $("#CustomerRegion").html("");
   $("#CustomerType").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
        
      }
   })
   $("#advanceCustomer").show();
});
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
         }
         if(from=="state")
         {
            $("#CustomerDistrict").html("");
         }
         if(from=="district")
         {
            $("#CustomerCity").html("");
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
   alert("success");
})
// end store customer ===================================================

//start edit customer ===============================================
// end edit customer ================================================

// start delete customer =============================================
// end delete customer ===================================================