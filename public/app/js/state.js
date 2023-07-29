var base_path = $("#url").val();
$(".close_stateModal").click(function()
{
$("#stateModal").modal("hide");
});
function openstateModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/state",
      success:function(res)
      {
         $("#state_datatable").html(res);
      }
   });
   $("#stateModal").modal("show");
}
$("#openCreateStateModal").click(function(){
   $("#statename").val("");
   $("#state_create_country").val("")
   $("#stateAdd").modal("show");
});
// end view data ==================================


// start country code for table=============================================
$("#openCreateStateModal").click(function(){
$("#state_create_country").html("");
   $.ajax({
      type:'get',
      url:base_path+"/customer-getDetails",
      data:{'from':'open_form'},
      success:function(res)
      {
         $("#state_create_country").append(res.country);
      }
         });
   $("#stateAdd").modal("show");
});
// end country code for table
$(".close_openCreateStateModal").click(function(){
   $("#stateAdd").modal("hide");
});
 $(".close_openCreateUserModal").click(function(){
    $("#userAdd").modal("hide");
});

// store query start=======================================================
$("#storeState").click(function(){
    var _token=$("#token").val();
    var id=$("#create_country").val();
    var statename =$("#statename").val();
    var create_country=$("#state_create_country").val();
    if(statename=="" || statename==null)
    {
      alert("please fill state name !");
      return false
    }
    if(create_country=="" || create_country==null)
    {
      alert("please fill state name !");
      return false
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('statename',statename);
    formData.append('create_country',create_country);
    $.ajax({
       type:'POST',
       processData: false,
       contentType: false,
       cache: false,
       async: false,
       data:formData,
       url:base_path+"/state-store",
       success:function()
       {
          alert("success data stored !");
          openstateModel();
          $("#stateAdd").modal("hide");
 
       }
    });
});
 $(".close_openCreateStateModal").click(function(){

   $("#stateAdd").modal("hide");
});
// //end store

// delete query===========================================================
$("body").on('click','#delete_state',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id': id},
         url:base_path+"/state-delete",
         success:function(){
            alert("success data deleted !");
            openstateModel();
         }
      });
   }
});
// end delete query

// start edit==============================================================
$("body").on('click','#edit_state',function(){
   $("#update_country").html("");
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      url:base_path+"/state-edit",
      data:{'id':id},
      success:function(res)
      {
         var countryL=res.country.length;
         var countryOp="";
         for(var i=0;i<countryL;i++)
         {
            var country_id=res.country[i].id;
            var country_name=res.country[i].country_name;
            countryOp+="<option value="+country_id+">"+country_name+"</option>";
         }
         $("#state_update_country").append(countryOp);
         $("#cstate_id").val(res.allData.state_id);
         $("#update_statename").val(res.allData.name);
         $("#state_update_country").val(res.allData.country_id)
      }
   });

   $("#UpdateStateModal").modal("show");
});
// end edit

$('#UpdateStateModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateStateModal").click(function(){
   $("#UpdateStateModal").modal("hide");
});

// update start=================================================================
$("#update_storeState").click(function(){
   var _token=$("#token").val();
   var id=$("#cstate_id").val();
   var state_name =$("#update_statename").val();
   var state_update_country=$("#state_update_country").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('update_statename',state_name);
   formData.append('state_update_country',state_update_country);
   $.ajax({
   type:'POST',
   processData: false,
   contentType: false,
   cache: false,
   async: false,
   data:formData,
   url:base_path+"/state-update",
   success:function()
   {
      alert("success data Updated !");
      openstateModel();
      $("#UpdateStateModal").modal("hide");

   }
});
});
//end update
