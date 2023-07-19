var base_path = $("#url").val();
// list data ==========================================================
$(".close_userModal").click(function(){
   $("#userModal").modal("hide");
});

function openUserModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/user",
      success:function(res){
         $("#user_datatable").html(res);
      }
   });
   $("#userModal").modal("show");
}
// end list ==========================================================
$("#customer_country").html("");
$("#openCreateUserModal").click(function(){
   $.ajax({
      type:'get',
      url:base_path+"/user-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#customer_country").append(res.country);
        
      }
   });
   $("#userAdd").modal("show");
 });
 $(".close_openCreateUserModal").click(function(){
    $("#userAdd").modal("hide");
});
 
