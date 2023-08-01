var base_path = $("#url").val();
// list data ==========================================================
$(".close_AddressRegionModal").click(function(){
   $("#AddressRegionModal").modal("hide");
});
function addressRegion()
{
   $("#addressRegion_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/address_region",
      success:function(res){
         $("#addressRegion_datatable").append(res);
      }
   });
   $("#AddressRegionModal").modal("show");
}


// end list data =====================================================

// start store address_region ==================================================

$("#AddressRegionModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
});
$("#storeAddressRegion").click(function(){
   var _token=$("#token").val();
   var AddressRegion_name=$("#AddressRegion_name").val();
   if(AddressRegion_name=="" || AddressRegion_name==null)
   {
      alert("please fill  name !");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('AddressRegion_name',AddressRegion_name);
  
   $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/address_region-store",
        success:function(){
            $("#AddressRegion_name").val("");
            alert("success data stored !");
            addressRegion();
        }
   })
})
// end store address_region ===========================================

//start edit address_region ===============================================
$("body").on('click','#edit_addressRegion',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        data:{'id':id},
        url:base_path+"/address_region-edit",
        success:function(res){
            $("#AddressRegion_id").val(res.id);
            $("#update_AddressRegion_name").val(res.name);       
        }
   });
   $("#UpdateAddressRegionModal").modal("show");
});
$('#UpdateAddressRegionModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
$(".close_openUpdateAddressRegionModal").click(function(){
    $("#UpdateAddressRegionModal").modal("hide");
});
$("#updatAddressRegion").click(function(){
   var _token=$("#token").val();
   var id=$("#AddressRegion_id").val();
   var addressRegion=$("#update_AddressRegion_name").val();
   if(addressRegion=="" || addressRegion==null)
   {
      alert("please fill name !");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('addressRegion',addressRegion);
   formData.append('id',id);
   $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/address_region-update",
        success:function(){
            $("#AddressRegion_name").val("");
            alert("success data update !");
            addressRegion();
            $("#UpdateAddressRegionModal").modal("hide");
        }
    })
});
// end edit address_region ================================================

// start delete address_region ===============================================
$("body").on('click','#delete_addressRegion',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/address_region-delete",
         success:function(){
            alert("success data deleted !");
            addressRegion();
         }
      });
   }
});
// end delete address_region ===================================================