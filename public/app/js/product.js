var base_path = $("#url").val();
// list data ==========================================================
$(".close_productModal").click(function(){
   $("#productModal").modal("hide");
});
function openProductModel()
{
   $("#product_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/product",
      success:function(res){
         $("#product_datatable").append(res);
      }
   });
   $("#productModal").modal("show");
}
// end list data =====================================================
// get Category details 
function getproductCategory(id ,from)
{
   $.ajax({
      type:'get',
      url:base_path+"/product-getCategoryDetails",
      data:{'from':from,'id':id},
      success:function(res){
         if(from=="category")
         {
            $("#product_baseProduct_name").html("");
            $("#product_baseProduct_name").append(res);
         }
         if(from=="base_product")
         {
            $("#product_subProduct_name").html("");
            $("#product_subProduct_name").append(res);
         }
      }
   });
}
// end category
// start store customer ==================================================
$("#openCreateproductModal").click(function(){
   $("#product_UOM").html("");
   $("#product_country_a").html("");
   $("#product_country_b").html("");
   $("#product_country_c").html("");
   $("#product_category_name").html("");
   var from="open_from";
   $.ajax({
      type:'get',
      url:base_path+"/product-getCategoryDetails",
      data:{'from':from},
      success:function(res){
         $("#product_UOM").append(res.UOM);
         $("#product_country_a").append(res.country);
         $("#product_country_b").append(res.country);
         $("#product_country_c").append(res.country);
         $("#product_category_name").append(res.Category);
      }
   });
   $("#createProductModal").modal("show");
})
$('#createProductModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openCreateProductModal").click(function(){
   $("#createProductModal").modal("hide");
});
$("#storeProduct").click(function(){
   var _token=$("#token").val();
   var product_specific_name=$("#product_specific_name").val();
   var product_full_name=$("#product_full_name").val();
   var product_category_name=$("#product_category_name").val();
   var product_baseProduct_name=$("#product_baseProduct_name").val();
   var product_subProduct_name=$("#product_subProduct_name").val();
   var product_grades=$("#product_grades").val();
   var product_standards=$("#product_standards").val();
   var product_DimensionsProperties=$("#product_DimensionsProperties").val();
   var product_TechnicalSpecs=$("#product_TechnicalSpecs").val();
   var product_Applications=$("#product_Applications").val();
   var product_PriceStructure=$("#product_PriceStructure").val();
   var product_PackingMethod=$("#product_PackingMethod").val();
   var product_Weightcalculation=$("#product_Weightcalculation").val();
   var product_Comments=$("#product_Comments").val();
   var product_UOM=$("#product_UOM").val();
   var product_shipmentMode=$("#product_shipmentMode").val();
   var product_HSCode=$("#product_HSCode").val();
   var product_country_a=$("#product_country_a").val();
   var product_country_b=$("#product_country_b").val();
   var product_country_c=$("#product_country_c").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('product_specific_name',product_specific_name);
   formData.append('product_full_name',product_full_name);
   formData.append('product_category_name',product_category_name);
   formData.append('product_baseProduct_name',product_baseProduct_name);
   formData.append('product_subProduct_name',product_subProduct_name);
   formData.append('product_grades',product_grades);
   formData.append('product_grades',product_grades);
   formData.append('product_standards',product_standards);
   formData.append('product_DimensionsProperties',product_DimensionsProperties);
   formData.append('product_TechnicalSpecs',product_TechnicalSpecs);
   formData.append('product_Applications',product_Applications);
   formData.append('product_PriceStructure',product_PriceStructure);
   formData.append('product_PackingMethod',product_PackingMethod);
   formData.append('product_Weightcalculation',product_Weightcalculation);
   formData.append('product_Comments',product_Comments);
   formData.append('product_UOM',product_UOM);
   formData.append('product_shipmentMode',product_shipmentMode);
   formData.append('product_HSCode',product_HSCode);
   formData.append('product_country_a',product_country_a);
   formData.append('product_country_b',product_country_b);
   formData.append('product_country_c',product_country_c);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/product-store",
      success:function(){
         alert("success data stored !");
         openProductModel();
         $("#createProductModal").modal("hide");

      }
   })
})
// end store customer ===================================================

//start edit customer ===============================================
// $("body").on('click','#edit_customer',function(){
//    $("#update_customer_country").html("");
//    $("#update_CustomerRegion").html(""); 
//    $("#update_CustomerType").html("");
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
//         $("#customer_id").val(res.id);
//         $("#update_customer_name").val(res.customer_name);
//         $("#update_customerPostBox").val(res.postbox);
//         $("#update_customer_groupCos").val(res.group_cos);
//         $("#update_customer_address1").val(res.address1);
//         $("#update_customer_address2").val(res.address2);
//         $("#update_CustomerArea").val(res.area);
//         $("#update_customerLandMark").val(res.landmark);
//         $("#update_customer_country").val(res.country).change();
        
//         $("#update_CustomerDistrict").val(res.district);
//         $("#update_CustomerCity").val(res.city);
//         $("#update_CustomerRegion").val(res.region);
//         $("#update_CustomerType").val(res.address_type);
//         $("#update_customerPhoneNo").val(res.phone_no);
//         $("#update_customerFax").val(res.fax);
//         $("#update_customerLocationEmail").val(res.location_email);
//         $("#update_customerWebsite").val(res.website);
//         $("#update_customerReferencedBy").val(res.refere_by);
//         $("#update_CustomerTradeActivity").val(res.trade_activity);
//         $("#update_CustomerFacilityAndLocation").val(res.facility_location);
//         $("#update_customerContact").val(res.customer_contact);
//         $("#update_customerBank").val(res.bank_id);
//         $("#update_customerCreditFacility").val(res.credit_facility);
//         $("#update_customerVisiteRating").val(res.visite_rating);
//         if($("#update_customer_country").val() !="")
//          {
//             var id=$("#update_customer_country").find(":selected").val();
//             var from="country";
//             getAddress(id,from);
//          }
//          $("#update_CustomerState").val(res.state);
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
// end edit customer ================================================

// start view data ==================================================
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

// end view data ====================================================

// start delete customer ===============================================
$("body").on('click','#delete_product',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/product-delete",
         success:function(){
            alert("success data deleted !");
            openProductModel();
         }
      });
   }
});
// end delete customer ===================================================