var base_path = $("#url").val();
// start view data ================================================
$(".close_districtModal").click(function(){
   $("#districtModal").modal("hide");
});
function opendistrictModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/district",
      success:function(res)
      {
         $("#district_datatable").html(res);
      }
   });
   $("#districtModal").modal("show");
}
 $(".close_openCreateDistrictModal").click(function(){
    $("#districtAdd").modal("hide");
 });
 // end view model===============================================

//  start store ===============================================
$("#openCreateDistrictModal").click(function(){
   $("#districtname").val("");
   $("#district_createstate").val("");
});
$("#openCreateDistrictModal").click(function(){
   $("#district_createstate").html("");
   $("#districtname").html("");
      $.ajax({
         url: base_path+"/district-getDetails",
         type: "GET",
         success: function (data){
            $("#district_createstate").append(data);
         }
      });
   $("#districtAdd").modal("show");
});
$(".close_openCreateDistrictModal").click(function(){
   $("#districtAdd").modal("hide");
});
$("#storeDistrict").click(function(){
   var _token=$("#token").val();
   var districtname =$("#districtname").val();
   var create_state=$("#district_createstate").val();
   if(districtname=="" || districtname==null)
   {
      alert("please fill District name");
      return false;
   }
   if(create_state=="" || create_state==null)
   {
      alert("please select state name");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('districtname',districtname);
   formData.append('create_state',create_state);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/district-store",
      success:function()
      {
         alert("success data stored !");
         opendistrictModel();
         $("#districtAdd").modal("hide");
      }
   });
});
$(".close_openCreateDistrictModal").click(function(){
  $("#districtAdd").modal("hide");
});
 //end store========================================================

 // delete query start=============================================================
$("body").on('click','#delete_district',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id': id},
         url:base_path+"/district-delete",
         success:function(){
            alert("success data deleted !");
            opendistrictModel();
         }
      });
   }
});
// end delete =====================================================

// start edit==============================================================
$("body").on('click','#edit_district',function(){  
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      url:base_path+"/district-edit",
      data:{'id':id},
      success:function(res){
         $("#district_update_state").html("");
         var stateL=res.state.length;
         var stateOp="";
         for(var i=0;i<stateL;i++)
         {
            var state_id=res.state[i].state_id;
            var state_name=res.state[i].name;
            stateOp+="<option value="+state_id+">"+state_name+"</option>";
         }
         $("#district_update_state").append(stateOp);
         $("#cdistrict_id").val(res.allData.district_id);
         $("#update_districtname").val(res.allData.district_name);
         $("#district_update_state").val(res.allData.state_id);        
      }      
   });
   $("#UpdateDistrictModal").modal("show");
});
$('#UpdateDistrictModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateDistrictModal").click(function(){
   $("#UpdateDistrictModal").modal("hide");
});
$("#update_storeDistrict").click(function(){
   var _token=$("#token").val();
   var id=$("#cdistrict_id").val();
   var did=$("#district_update_state").val();
   var district_name =$("#update_districtname").val();
   var district_update_state=$("#district_update_state").val();
   if(district_name=="" || district_name==null)
   {
      alert("please select district name");
      return false;
   }
   if(district_update_state=="" || district_update_state==null)
   {
      alert("please select state name");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('update_districtname',district_name);
   formData.append('district_update_state',district_update_state);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/district-update",
      success:function(){
         alert("success data Updated !");
         opendistrictModel();
         $("#UpdateDistrictModal").modal("hide");
      }
   });
});
// end update=======================================================
