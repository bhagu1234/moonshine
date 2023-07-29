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
   var fname =$("#fname").val();
   var lname =$("#lname").val();
   var uemail =$("#uemail").val();
   var upassword=$("#upassword").val();
   var user_country=$("#user_country").val();
   var userState=$("#userState").val();
   var userDistrict=$("#userDistrict").val();
   var userCity=$("#userCity").val();
   var upincode=$("#upincode").val();
   if(fname=="" || fname==null)
   {
      alert("please fill first name");
      return false
   }
   if(lname=="" || lname==null)
   {
      alert("please fill Last name");
      return false
   }
   if(uemail=="" || uemail==null)
   {
      alert("please fill email");
      return false
   }
   if(upassword=="" || upassword==null)
   {
      alert("please fill password");
      return false
   }
   if(user_country=="" || user_country==null)
   {
      alert("please fill country name");
      return false
   }
   if(userState=="" || userState==null)
   {
      alert("please fill State name");
      return false
   }
   if(userDistrict=="" || userDistrict==null)
   {
      alert("please fill district name");
      return false
   }
   if(userCity=="" || userCity==null)
   {
      alert("please fill city name");
      return false
   }
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

// start edit ========================================================
$("body").on('click','#edit_user',function(){
   $("#update_usercountry").html("");
   $("#update_UserState").html("");
   $("#update_UserDistrict").html("");
   $("#update_UserCity").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res){
         $("#update_usercountry").append(res.country);
      }
   });
    var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/users-edit",
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
         $("#update_UserState").append(stOption);
         for(var i=0;district>i;i++)
         {
            var district_id=res.district[i].district_id;
            var district_name=res.district[i].district_name;
            distrOption+="<option  value="+district_id+">"+district_name+"</option>";
            
         }
         $("#update_UserDistrict").append(distrOption);
         for(var i=0;city>i;i++)
         {
            var city_id=res.city[i].city_id;
            var city_name=res.city[i].city_name;
            cityOption+="<option  value="+city_id+">"+city_name+"</option>";
            
         }
         $("#update_UserCity").append(cityOption);
         $("#cuser_id").val(res.allData.id);
         $("#update_fname").val(res.allData.first_name);
         $("#update_lname").val(res.allData.last_name);
         $("#update_uemail").val(res.allData.email);
         $("#update_usercountry").val(res.allData.country);
         $("#update_UserState").val(res.allData.state);
         $("#update_UserDistrict").val(res.allData.district);
         $("#update_UserCity").val(res.allData.city);
         $("#update_upincode").val(res.allData.pin_code);
           
      }
   });
   $("#UpdateUserModal").modal("show");
});
$('#UpdateUserModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateUserModal").click(function(){
   $("#UpdateUserModal").modal("hide");
});
$("#update_storeUser").click(function(){
   var _token=$("#token").val();
   var id=$("#cuser_id").val();
   var update_fname =$("#update_fname").val();
   var update_lname =$("#update_lname").val();
   var update_uemail =$("#update_uemail").val();
   var update_usercountry=$("#update_usercountry").val();
   var update_UserState=$("#update_UserState").val();
   var update_UserDistrict=$("#update_UserDistrict").val();
   var update_UserCity=$("#update_UserCity").val();
   var update_upincode=$("#update_upincode").val();
   var formData=new FormData();
   if(update_fname=="" || update_fname==null)
   {
      alert("please fill first name");
      return false
   }
   if(update_lname=="" || update_lname==null)
   {
      alert("please fill Last name");
      return false
   }
   if(update_uemail=="" || update_uemail==null)
   {
      alert("please fill email");
      return false
   }
   if(update_usercountry=="" || update_usercountry==null)
   {
      alert("please fill country name");
      return false
   }
   if(update_UserState=="" || update_UserState==null)
   {
      alert("please fill State name");
      return false
   }
   if(update_UserDistrict=="" || update_UserDistrict==null)
   {
      alert("please fill district name");
      return false
   }
   if(update_UserCity=="" || update_UserCity==null)
   {
      alert("please fill city name");
      return false
   }
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('update_fname',update_fname);
   formData.append('update_lname',update_lname);
   formData.append('update_uemail',update_uemail);
   formData.append('update_usercountry',update_usercountry);
   formData.append('update_UserState',update_UserState);
   formData.append('update_UserDistrict',update_UserDistrict);
   formData.append('update_UserCity',update_UserCity);
   formData.append('update_upincode',update_upincode);  
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/user-update",
      success:function(){
         alert("success data Updated !");
         openUserModel();
         $("#UpdateUserModal").modal("hide");

      }
   });
});
// end edit=============================================================

// start delete ====================================================
$("body").on('click','#delete_user',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/user-delete",
         success:function(){
            alert("success data deleted !");
            openUserModel()
         }
      });
   }
});
// end delete ======================================================
 
