var base_path = $("#url").val();
// list data ==========================================================
$(".close_supplierModal").click(function(){
   $("#supplierModal").modal("hide");
});
function openSupplierModel()
{
   $("#supplier_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/supplier",
      success:function(res){
         $("#supplier_datatable").append(res);
      }
   });
   $("#supplierModal").modal("show");
}


// end list data =====================================================

// start store supplier ==================================================

$("#openCreatesupplierModal").click(function(){
   $("#supplier_country").html("");
   $("#supplierRegion").html(""); 
   $("#supplierType").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#supplier_country").append(res.country);
         $("#supplierRegion").append(res.region); 
         $("#supplierType").append(res.addressType);
      }
   });
   $("#createsupplierModal").modal("show");
});
$("#createsupplierModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
   });

$(".close_openCreatesupplierModal").click(function(){
   $("#createsupplierModal").modal("hide");
});
$('#createsupplierModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$("#storesupplier").click(function(){
   var _token=$("#token").val();
   var supplier_name=$("#supplier_name").val();
   var supplierPostBox=$("#supplierPostBox").val();
   var supplier_groupCos=$("#supplier_groupCos").val();
   var supplier_address1=$("#supplier_address1").val();
   var supplier_address2=$("#supplier_address2").val();
   var supplierArea=$("#supplierArea").val();
   var supplierLandMark=$("#supplierLandMark").val();
   var supplier_country=$("#supplier_country").val();
   var supplierState=$("#supplierState").val();
   var supplierDistrict=$("#supplierDistrict").val();
   var supplierCity=$("#supplierCity").val();
   var supplierRegion=$("#supplierRegion").val();
   var supplierType=$("#supplierType").val();
   var supplierPhoneNo=$("#supplierPhoneNo").val();
   var supplierFax=$("#supplierFax").val();
   var supplierLocationEmail=$("#supplierLocationEmail").val();
   var supplierWebsite=$("#supplierWebsite").val();
   var supplierReferencedBy=$("#supplierReferencedBy").val();
   var supplierTradeActivity=$("#supplierTradeActivity").val();
   var supplierFacilityAndLocation=$("#supplierFacilityAndLocation").val();
   // var supplierContact=$("#supplierContact").val();
   // var supplierBank=$("#supplierBank").val();
   // var supplierCreditFacility=$("#supplierCreditFacility").val();
   // var supplierVisiteRating=$("#supplierVisiteRating").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('supplier_name',supplier_name);
   formData.append('supplierPostBox',supplierPostBox);
   formData.append('supplier_groupCos',supplier_groupCos);
   formData.append('supplier_address1',supplier_address1);
   formData.append('supplier_address2',supplier_address2);
   formData.append('supplierArea',supplierArea);
   formData.append('supplierLandMark',supplierLandMark);
   formData.append('supplier_country',supplier_country);
   formData.append('supplierState',supplierState);
   formData.append('supplierDistrict',supplierDistrict);
   formData.append('supplierCity',supplierCity);
   formData.append('supplierRegion',supplierRegion);
   formData.append('supplierType',supplierType);
   formData.append('supplierPhoneNo',supplierPhoneNo);
   formData.append('supplierFax',supplierFax);
   formData.append('supplierLocationEmail',supplierLocationEmail);
   formData.append('supplierWebsite',supplierWebsite);
   formData.append('supplierReferencedBy',supplierReferencedBy);
   formData.append('supplierTradeActivity',supplierTradeActivity);
   formData.append('supplierFacilityAndLocation',supplierFacilityAndLocation);
   // formData.append('supplierContact',supplierContact);
   // formData.append('supplierBank',supplierBank);
   // formData.append('supplierCreditFacility',supplierCreditFacility);
   // formData.append('supplierVisiteRating',supplierVisiteRating);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/supplier-store",
      success:function(){
         alert("success data stored !");
         openSupplierModel();
         $("#createsupplierModal").modal("hide");

      }
   })
})
// end store supplier ===================================================

//start edit supplier ===============================================
$("body").on('click','#edit_supplier',function(){
   $("#update_supplier_country").html("");
   $("#update_supplierRegion").html(""); 
   $("#update_supplierType").html("");
   $("#update_supplierState").html("");
   $("#update_supplierDistrict").html("");
   $("#update_supplierCity").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#update_supplier_country").append(res.country);
         $("#update_supplierRegion").append(res.region); 
         $("#update_supplierType").append(res.addressType);
         
      }
   });
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/supplier-edit",
      success:function(res){
         var state=res.state.length;
         var stOption="";
         var district=res.district.length;
         var distrOption="";
         var city=res.city.length;
         var cityOption="";
         $("#update_supplierState").append(stOption);
         for(var i=0;state>i;i++)
         {
            var state_id=res.state[i].state_id;
            var state_name=res.state[i].name;
            stOption+="<option  value="+state_id+">"+state_name+"</option>";
            
         }
         $("#update_supplierState").append(stOption);
         for(var i=0;district>i;i++)
         {
            var district_id=res.district[i].district_id;
            var district_name=res.district[i].district_name;
            distrOption+="<option  value="+district_id+">"+district_name+"</option>";
            
         }
         $("#update_supplierDistrict").append(distrOption);
         for(var i=0;city>i;i++)
         {
            var city_id=res.city[i].city_id;
            var city_name=res.city[i].city_name;
            cityOption+="<option  value="+city_id+">"+city_name+"</option>";
            
         }
         $("#update_supplierCity").append(cityOption);
         $("#supplier_id").val(res.allData.id);
         $("#update_supplier_name").val(res.allData.supplier_name);
         $("#update_supplierPostBox").val(res.allData.postbox);
         $("#update_supplier_groupCos").val(res.allData.group_cos);
         $("#update_supplier_address1").val(res.allData.address1);
         $("#update_supplier_address2").val(res.allData.address2);
         $("#update_supplierArea").val(res.allData.area);
         $("#update_supplierLandMark").val(res.allData.landmark);
         $("#update_supplier_country").val(res.allData.country);
         $("#update_supplierState").val(res.allData.state);
         $("#update_supplierDistrict").val(res.allData.district);
         $("#update_supplierCity").val(res.allData.city);
         $("#update_supplierRegion").val(res.allData.region);
         $("#update_supplierType").val(res.allData.address_type);
         $("#update_supplierPhoneNo").val(res.allData.phone_no);
         $("#update_supplierFax").val(res.allData.fax);
         $("#update_supplierLocationEmail").val(res.allData.location_email);
         $("#update_supplierWebsite").val(res.allData.website);
         $("#update_supplierReferencedBy").val(res.allData.refere_by);
         $("#update_supplierTradeActivity").val(res.allData.trade_activity);
         $("#update_supplierFacilityAndLocation").val(res.allData.facility_location);
         // $("#update_supplierContact").val(res.allData.supplier_contact);
         // $("#update_supplierBank").val(res.allData.bank_id);
         // $("#update_supplierCreditFacility").val(res.allData.credit_facility);
         // $("#update_supplierVisiteRating").val(res.allData.visite_rating);
       
      }
   });
   $("#UpdatesupplierModal").modal("show");
});
$('#UpdatesupplierModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdatesupplierModal").click(function(){
   $("#UpdatesupplierModal").modal("hide");
});
$("#update_storesupplier").click(function(){
   var _token=$("#token").val();
   var id=$("#supplier_id").val();
   var supplier_name=$("#update_supplier_name").val();
   var supplierPostBox=$("#update_supplierPostBox").val();
   var supplier_groupCos=$("#update_supplier_groupCos").val();
   var supplier_address1=$("#update_supplier_address1").val();
   var supplier_address2=$("#update_supplier_address2").val();
   var supplierArea=$("#update_supplierArea").val();
   var supplierLandMark=$("#update_supplierLandMark").val();
   var supplier_country=$("#update_supplier_country").val();
   var supplierState=$("#update_supplierState").val();
   var supplierDistrict=$("#update_supplierDistrict").val();
   var supplierCity=$("#update_supplierCity").val();
   var supplierRegion=$("#update_supplierRegion").val();
   var supplierType=$("#update_supplierType").val();
   var supplierPhoneNo=$("#update_supplierPhoneNo").val();
   var supplierFax=$("#update_supplierFax").val();
   var supplierLocationEmail=$("#update_supplierLocationEmail").val();
   var supplierWebsite=$("#update_supplierWebsite").val();
   var supplierReferencedBy=$("#update_supplierReferencedBy").val();
   var supplierTradeActivity=$("#update_supplierTradeActivity").val();
   var supplierFacilityAndLocation=$("#update_supplierFacilityAndLocation").val();
   // var supplierContact=$("#update_supplierContact").val();
   // var supplierBank=$("#update_supplierBank").val();
   // var supplierCreditFacility=$("#update_supplierCreditFacility").val();
   // var supplierVisiteRating=$("#update_supplierVisiteRating").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('supplier_name',supplier_name);
   formData.append('supplierPostBox',supplierPostBox);
   formData.append('supplier_groupCos',supplier_groupCos);
   formData.append('supplier_address1',supplier_address1);
   formData.append('supplier_address2',supplier_address2);
   formData.append('supplierArea',supplierArea);
   formData.append('supplierLandMark',supplierLandMark);
   formData.append('supplier_country',supplier_country);
   formData.append('supplierState',supplierState);
   formData.append('supplierDistrict',supplierDistrict);
   formData.append('supplierCity',supplierCity);
   formData.append('supplierRegion',supplierRegion);
   formData.append('supplierType',supplierType);
   formData.append('supplierPhoneNo',supplierPhoneNo);
   formData.append('supplierFax',supplierFax);
   formData.append('supplierLocationEmail',supplierLocationEmail);
   formData.append('supplierWebsite',supplierWebsite);
   formData.append('supplierReferencedBy',supplierReferencedBy);
   formData.append('supplierTradeActivity',supplierTradeActivity);
   formData.append('supplierFacilityAndLocation',supplierFacilityAndLocation);
   // formData.append('supplierContact',supplierContact);
   // formData.append('supplierBank',supplierBank);
   // formData.append('supplierCreditFacility',supplierCreditFacility);
   // formData.append('supplierVisiteRating',supplierVisiteRating);
   formData.append('id',id);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/supplier-update",
      success:function(){
         alert("success data Updated !");
         openSupplierModel();
         $("#UpdatesupplierModal").modal("hide");

      }
   });
});
// end edit supplier ================================================

// start view data ==================================================
function view_Supplier(id)
{
   $("#check_suppliyer_customer").val('suplier');
   $("#supplier_contact_list").html("");
   $("#supplier_bank_tabledata").html("");
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/supplier-view",
      success:function(res){
         $(".supplier_name_view").text(res.supplierdata.supplier_name);
         $(".group_cos_view").text(res.supplierdata.group_cos);
         $(".address1_view").text(res.supplierdata.address1);
         $(".address2_view").text(res.supplierdata.address2);
         $(".location_email_view").text(res.supplierdata.location_email);
         // alert(res.supplierdata.id);
         $("#contactCustomer").val(res.supplierdata.id);
         $("#bankCustomer").val(res.supplierdata.id);
         $("#supplier_contact_list").append(res.contact_tr);
         $("#supplier_bank_tabledata").append(res.bank_tr);
      }
   });
   $("#supplierDetailsviewModal").modal("show");
}
$(".close_supplierModalview").click(function(){
   $("#supplierDetailsviewModal").modal("hide");
});

// end view data ====================================================

// start delete supplier ===============================================
$("body").on('click','#delete_supplier',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/supplier-delete",
         success:function(){
            alert("success data deleted !");
            openSupplierModel();
         }
      });
   }
});
// end delete supplier ===================================================