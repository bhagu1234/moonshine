var base_path = $("#url").val();
// list data ==========================================================
$(".close_UomModal").click(function(){
   $("#UomModal").modal("hide");
});
function uomView()
{
   $("#uom_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/uom",
      success:function(res){
         $("#uom_datatable").append(res);
      }
   });
   $("#UomModal").modal("show");
}
// end list data =====================================================
// start store uom ==========================================

$("#UomModal").on("shown.bs.modal",function(){
    $(this).hide().show(); 
 });
 $("#storeUom").click(function(){
     var _token=$("#token").val();
     var uomname=$("#uomname").val();
     if(uomname=="" || uomname==null)
     {
         alert("please fill name !");
         return false;
     }
     var formData=new FormData();
     formData.append('_token',_token);
     formData.append('uomname',uomname);  
     $.ajax({
         type:'POST',
         processData: false,
         contentType: false,
         cache: false,
         async: false,
         data:formData,
         url:base_path+"/uom-store",
         success:function(){
             $("#uomname").val("");
             alert("success data stored !");
             uomView();
         }
     })
 })
 // end store uom ===========================================

 //start edit address_type ===============================================
$("body").on('click','#edit_Uom',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        data:{'id':id},
        url:base_path+"/uom-edit",
        success:function(res){
            $("#uom_id").val(res.id);
            $("#update_uom_name").val(res.name);       
        }
   });
   $("#UpdateUomModal").modal("show");
});
$('#UpdateUomModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
$(".close_openUpdateUomModal").click(function(){
    $("#UpdateUomModal").modal("hide");
});
$("#updateUom").click(function(){
    var _token=$("#token").val();
    var id=$("#uom_id").val();
    var uom=$("#update_uom_name").val();
    if(uom==""|| uom==null)
    {
        alert("please fill name !");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('uom',uom);
    formData.append('id',id);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/uom-update",
        success:function(){
            alert("success data update !");
            uomView();
            $("#UpdateUomModal").modal("hide");
           
        }
    });
});
// end edit uom ================================================

// start delete uom ===============================================
$("body").on('click','#delete_Uom',function(){
    var id=$(this).attr('data-value');
    if (confirm('Are you sure you want to delete this?')){   
        $.ajax({
          type:'get',
          data:{'id':id},
          url:base_path+"/uom-delete",
          success:function(){
             alert("success data deleted !");
             uomView();
          }
       });
    }
 });
 // end delete address_type ===================================================