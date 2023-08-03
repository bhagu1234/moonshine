var base_path = $("#url").val();
// list data ==========================================================
$(".close_StatusModal").click(function(){
   $("#StatusModal").modal("hide");
});
function statusView()
{
   $("#status_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/status",
      success:function(res){
         $("#status_datatable").append(res);
      }
   });
   $("#StatusModal").modal("show");
}
// end list data =====================================================
// start store address_type ==========================================

$("#StatusModal").on("shown.bs.modal",function(){
    $(this).hide().show(); 
 });
 $("#storeStatus").click(function(){
     var _token=$("#token").val();
     var statusname=$("#statusname").val();
     if(statusname=="" || statusname==null)
     {
         alert("please fill name !");
         return false;
     }
     var formData=new FormData();
     formData.append('_token',_token);
     formData.append('statusname',statusname);  
     $.ajax({
         type:'POST',
         processData: false,
         contentType: false,
         cache: false,
         async: false,
         data:formData,
         url:base_path+"/status-store",
         success:function(){
             $("#statusname").val("");
             alert("success data stored !");
             statusView();
         }
     })
 })
 // end store address_type ===========================================

 //start edit address_type ===============================================
$("body").on('click','#edit_Status',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        data:{'id':id},
        url:base_path+"/status-edit",
        success:function(res){
            $("#status_id").val(res.id );
            $("#update_Status_name").val(res.name);       
        }
   });
   $("#UpdateStatusModal").modal("show");
});
$('#UpdateStatusModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
$(".close_openUpdateStatusModal").click(function(){
    $("#UpdateStatusModal").modal("hide");
});
$("#updateStatus").click(function(){
    var _token=$("#token").val();
    var id=$("#status_id").val();
    var status=$("#update_Status_name").val();
    if(status==""|| status==null)
    {
        alert("please fill name !");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('status',status);
    formData.append('id',id);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/status-update",
        success:function(){
            alert("success data update !");
            statusView();
            $("#UpdateStatusModal").modal("hide");
           
        }
    });
});
// end edit address_type ================================================

// start delete address_type ===============================================
$("body").on('click','#delete_Status',function(){
    var id=$(this).attr('data-value');
    if (confirm('Are you sure you want to delete this?')){   
        $.ajax({
          type:'get',
          data:{'id':id},
          url:base_path+"/status-delete",
          success:function(){
             alert("success data deleted !");
             statusView();
          }
       });
    }
 });
 // end delete address_type ===================================================