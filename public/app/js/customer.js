var base_path = $("#url").val();
// list data ==========================================================
$(".close_customerModal").click(function(){
   $("#customerModal").modal("hide");
});
function openCustomerModel()
{
   $("#customer_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer",
      success:function(res){
         $("#customer_datatable").append(res);
      }
   });
   $("#customerModal").modal("show");
}


// end list data =====================================================

// start store customer ==================================================

$("#openCreateCustomerModal").click(function(){
   $("#customer_country").html("");
   $("#CustomerRegion").html(""); 
   $("#CustomerType").html("");
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
// $("#createCustomerModal").on("shown.bs.modal",function(){
//    $(this).hide().show(); 
//    });

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
            $("#update_CustomerState").html("");
            $("#update_CustomerState").append(res);
         }
         if(from=="state")
         {
            $("#CustomerDistrict").html("");
            $("#CustomerDistrict").append(res);
            $("#update_CustomerDistrict").html("");
            $("#update_CustomerDistrict").append(res);
         }
         if(from=="district")
         {
            $("#CustomerCity").html("");
            $("#CustomerCity").append(res);
            $("#update_CustomerCity").html("");
            $("#update_CustomerCity").append(res);
         }
        
      }
   });
}
$('#createCustomerModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
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
   $("#update_customer_country").html("");
   $("#update_CustomerRegion").html(""); 
   $("#update_CustomerType").html("");
   $("#update_CustomerState").html("");
   $("#update_CustomerDistrict").html("");
   $("#update_CustomerCity").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#update_customer_country").append(res.country);
         $("#update_CustomerRegion").append(res.region); 
         $("#update_CustomerType").append(res.addressType);
         
      }
   });
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/customer-edit",
      success:function(res){
         var state=res.state.length;
         var stOption="";
         var district=res.district.length;
         var distrOption="";
         var city=res.city.length;
         var cityOption="";
         for(var i=0;state>i;i++)
         {
            var state_id=res.state[i].state_id;
            var state_name=res.state[i].name;
            console.log(state_id + "," + state_name);
            stOption+="<option  value="+state_id+">"+state_name+"</option>";
            
         }
         $("#update_CustomerState").append(stOption);
         for(var i=0;district>i;i++)
         {
            var district_id=res.district[i].district_id;
            var district_name=res.district[i].district_name;
            distrOption+="<option  value="+district_id+">"+district_name+"</option>";
            
         }
         $("#update_CustomerDistrict").append(distrOption);
         for(var i=0;city>i;i++)
         {
            var city_id=res.city[i].city_id;
            var city_name=res.city[i].city_name;
            cityOption+="<option  value="+city_id+">"+city_name+"</option>";
            
         }
         $("#update_CustomerCity").append(cityOption);
         $("#customer_id").val(res.allData.id);
         $("#update_customer_name").val(res.allData.customer_name);
         $("#update_customerPostBox").val(res.allData.postbox);
         $("#update_customer_groupCos").val(res.allData.group_cos);
         $("#update_customer_address1").val(res.allData.address1);
         $("#update_customer_address2").val(res.allData.address2);
         $("#update_CustomerArea").val(res.allData.area);
         $("#update_customerLandMark").val(res.allData.landmark);
         $("#update_customer_country").val(res.allData.country);
         $("#update_CustomerState").val(res.allData.state);
         $("#update_CustomerDistrict").val(res.allData.district);
         $("#update_CustomerCity").val(res.allData.city);
         $("#update_CustomerRegion").val(res.allData.region);
         $("#update_CustomerType").val(res.allData.address_type);
         $("#update_customerPhoneNo").val(res.allData.phone_no);
         $("#update_customerFax").val(res.allData.fax);
         $("#update_customerLocationEmail").val(res.allData.location_email);
         $("#update_customerWebsite").val(res.allData.website);
         $("#update_customerReferencedBy").val(res.allData.refere_by);
         $("#update_CustomerTradeActivity").val(res.allData.trade_activity);
         $("#update_CustomerFacilityAndLocation").val(res.allData.facility_location);
         $("#update_customerContact").val(res.allData.customer_contact);
         $("#update_customerBank").val(res.allData.bank_id);
         $("#update_customerCreditFacility").val(res.allData.credit_facility);
         $("#update_customerVisiteRating").val(res.allData.visite_rating);
         // if($("#update_customer_country").val() !="")
         //    {
         //       var id=$("#update_customer_country").find(":selected").val();
         //       var from="country";
         //       getAddress(id,from);
         //    }
           
      }
   });
   $("#UpdateCustomerModal").modal("show");
});
$('#UpdateCustomerModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateCustomerModal").click(function(){
   $("#UpdateCustomerModal").modal("hide");
});
$("#update_storeCustomer").click(function(){
   var _token=$("#token").val();
   var id=$("#customer_id").val();
   var customer_name=$("#update_customer_name").val();
   var customerPostBox=$("#update_customerPostBox").val();
   var customer_groupCos=$("#update_customer_groupCos").val();
   var customer_address1=$("#update_customer_address1").val();
   var customer_address2=$("#update_customer_address2").val();
   var CustomerArea=$("#update_CustomerArea").val();
   var customerLandMark=$("#update_customerLandMark").val();
   var customer_country=$("#update_customer_country").val();
   var CustomerState=$("#update_CustomerState").val();
   var CustomerDistrict=$("#update_CustomerDistrict").val();
   var CustomerCity=$("#update_CustomerCity").val();
   var CustomerRegion=$("#update_CustomerRegion").val();
   var CustomerType=$("#update_CustomerType").val();
   var customerPhoneNo=$("#update_customerPhoneNo").val();
   var customerFax=$("#update_customerFax").val();
   var customerLocationEmail=$("#update_customerLocationEmail").val();
   var customerWebsite=$("#update_customerWebsite").val();
   var customerReferencedBy=$("#update_customerReferencedBy").val();
   var CustomerTradeActivity=$("#update_CustomerTradeActivity").val();
   var CustomerFacilityAndLocation=$("#update_CustomerFacilityAndLocation").val();
   var customerContact=$("#update_customerContact").val();
   var customerBank=$("#update_customerBank").val();
   var customerCreditFacility=$("#update_customerCreditFacility").val();
   var customerVisiteRating=$("#update_customerVisiteRating").val();
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
   formData.append('id',id);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/customer-update",
      success:function(){
         alert("success data Updated !");
         openCustomerModel();
         $("#UpdateCustomerModal").modal("hide");

      }
   });
});
// end edit customer ================================================

// start view data ==================================================
$("body").on('click','.view_customer',function(){
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/customer-view",
      success:function(res){
         $(".customer_name_view").text(res.customer_name);
         $(".group_cos_view").text(res.group_cos);
         $(".address1_view").text(res.address1);
         $(".address2_view").text(res.address2);
         $(".location_email_view").text(res.location_email);
      }
   });
  
   $("#customerDetailsviewModal").modal("show");
});
$(".close_customerModalview").click(function(){
   $("#customerDetailsviewModal").modal("hide");
});

// end view data ====================================================

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