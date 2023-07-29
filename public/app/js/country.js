var base_path = $("#url").val();
$(".close_countryModal").click(function(){
   $("#countryModal").modal("hide");
});
function openCountryModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/country",
      success:function(res){
         $("#country_datatable").html(res);
      }
   });
   $("#countryModal").modal("show");
}
// end view model
$("#openCreateCountryModal").click(function(){
   $("#countryname").val("");
   $("#countryAdd").modal("show");
});
 
 
// store query start=======================================================
$("#storeCountry").click(function(){
   var _token=$("#token").val();
   var countryname =$("#countryname").val();
   if(countryname=="" || countryname==null)
   {
      alert("Plese fill country name !");
      return false
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('countryname',countryname);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/country-store",
      success:function(){
         alert("success data stored !");
         openCountryModel();
         $("#countryAdd").modal("hide");
 
      }
   });
});
$(".close_openCreateCountryModal").click(function(){
   $("#countryAdd").modal("hide");
});
// end store ========================================================

// start delete ======================================================
$("body").on('click','#delete_country',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/country-delete",
         success:function(){
            alert("success data deleted !");
            openCountryModel();
         }
      });
   }
});
// end delete ==========================================================


// start edit==============================================================
$("body").on('click','#edit_country',function(){
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      url:base_path+"/country-edit",
      data:{'id':id},
      success:function(res){
         $("#co_id").val(res.allData.id);
         $("#update_countryname").val(res.allData.country_name);    
      }
   });
   $("#UpdateCountryModal").modal("show");
});
$('#UpdateCountryModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateCountryModal").click(function(){
   $("#UpdateCountryModal").modal("hide");
});
$("#update_storeCountry").click(function(){
   var _token=$("#token").val();
   var id=$("#co_id").val();
   var country_name =$("#update_countryname").val();
   if(country_name=="" || country_name==null)
   {
      alert("Plese fill country name !");
      return false
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('update_countryname',country_name);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/country-update",
      success:function(){
         alert("success data Updated !");
         openCountryModel();
         $("#UpdateCountryModal").modal("hide");
      }
   });
});
// end edit=============================================================
