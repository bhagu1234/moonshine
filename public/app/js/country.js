var base_path = $("#url").val();
$(".close_countryModal").click(function(){

    $("#countryModal").modal("hide");
 });
//  view model

function openCountryModel()
{
   $.ajax({
      type:'get',
      url:base_path+"/country",
      success:function(res){
    //    alert("hi")
         $("#country_datatable").html(res);
      }
   });
   $("#countryModal").modal("show");
}
// end view model

$("#openCreateCountryModal").click(function(){
   $("#countryname").val("");//for empty textfield
    $("#countryAdd").modal("show");
});
 
 
// store query start=======================================================
$("#storeCountry").click(function(){
    var _token=$("#token").val();
    var id=$("#id").val();

   var countryname =$("#countryname").val();
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


//end store
// delete query
$("body").on('click','#delete_country',function(){
   var id=$(this).attr('data-value');
   // alert(id)
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
// end delete query


// start edit==============================================================
$("body").on('click','#edit_country',function(){

    var id=$(this).attr('data-value');
   // alert(id);
   $.ajax({
      type:'get',
      url:base_path+"/country-edit",
      data:{'id':id},
      success:function(res){
       // alert(res.allData.id);
       $("#co_id").val(res.allData.id);
         $("#update_countryname").val(res.allData.country_name);
                 
      }
   });

   $("#UpdateCountryModal").modal("show");
});
// end edit

$('#UpdateCountryModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateCountryModal").click(function(){
   $("#UpdateCountryModal").modal("hide");
});

// update start=================================================================
$("#update_storeCountry").click(function(){
   var _token=$("#token").val();
   // alert('hello');
   var id=$("#co_id").val();
   // alert(id);
   var country_name =$("#update_countryname").val();
   //  console.log(country_name);
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
//end update
