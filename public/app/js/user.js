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
// start storeuser =================================================
$("#openCreateUserModal").click(function(){
   $("#user_country").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#user_country").append(res.country);
      }
   });
   $("#userAdd").modal("show");
});
$(".close_openCreateUserModal").click(function(){
   $("#userAdd").modal("hide");
});
$("#storeUser").click(function(){
   var _token=$("#token").val();
   var id=$("#id").val();
   var fname =$("#fname").val();
   var lname =$("#lname").val();
   var uemail =$("#uemail").val();
   var upassword=$("#upassword").val();
   var user_country=$("#user_country").val();
   var userState=$("#userState").val();
   var userDistrict=$("#userDistrict").val();
   var userCity=$("#userCity").val();
   var upincode=$("#upincode").val();
 
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('fname',fname);
   formData.append('lname',lname);
   formData.append('uemail',uemail);
   formData.append('upassword',upassword);
   formData.append('user_country',user_country);
   formData.append('userState',userState);
   formData.append('userDistrict',userDistrict);
   formData.append('userCity',userCity);
  formData.append('upincode',upincode);
  
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/users-store",
      success:function(){
         alert("success data stored !");
         openUserModel();
         $("#userAdd").modal("hide");

      }
   })
});
// end store ========================================================
 
