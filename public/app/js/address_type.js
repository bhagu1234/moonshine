var base_path = $("#url").val();
// list data ==========================================================
$(".close_AddressTypeModal").click(function(){
   $("#AddressTypeModal").modal("hide");
});
function addressTypeView()
{
   $("#addressType_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/address_type",
      success:function(res){
         $("#addressType_datatable").append(res);
      }
   });
   $("#AddressTypeModal").modal("show");
}


// end list data =====================================================

// start store address_type ==========================================

$("#AddressTypeModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
});
$("#storeAddressType").click(function(){
    var _token=$("#token").val();
    var AddressType_name=$("#AddressType_name").val();
    if(AddressType_name=="" || AddressType_name==null)
    {
        alert("please fill name !");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('AddressType_name',AddressType_name);  
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/address_type-store",
        success:function(){
            $("#AddressType_name").val("");
            alert("success data stored !");
            addressTypeView();
        }
    })
})
// end store address_type ===========================================

//start edit address_type ===============================================
$("body").on('click','#edit_AddressType',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        data:{'id':id},
        url:base_path+"/address_type-edit",
        success:function(res){
            $("#AddressType_id").val(res.address_id );
            $("#update_AddressType_name").val(res.address_name);       
        }
   });
   $("#UpdateAddressTypeModal").modal("show");
});
$('#UpdateAddressTypeModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
$(".close_openUpdateAddressTypeModal").click(function(){
    $("#UpdateAddressTypeModal").modal("hide");
});
$("#updatAddressType").click(function(){
    var _token=$("#token").val();
    var id=$("#AddressType_id").val();
    var addressType=$("#update_AddressType_name").val();
    if(addressType=="" || addressType==null)
    {
        alert("please fill name !");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('addressType',addressType);
    formData.append('id',id);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/address_type-update",
        success:function(){
            alert("success data update !");
            addressTypeView();
            $("#UpdateAddressTypeModal").modal("hide");
        }
    })
});
// end edit address_type ================================================

// start delete address_type ===============================================
$("body").on('click','#delete_AddressType',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/address_type-delete",
         success:function(){
            alert("success data deleted !");
            addressTypeView();
         }
      });
   }
});
// end delete address_type ===================================================