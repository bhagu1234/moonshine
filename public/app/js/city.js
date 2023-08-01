var base_path = $("#url").val();
// view data ===============================================
$(".close_cityModal").click(function(){
   $("#cityModal").modal("hide");
});
function opencityModel(){
   $.ajax({
      type:'get',
      url:base_path+"/city",
      success:function(res){
         $("#city_datatable").html(res);
      }
   });
   $("#cityModal").modal("show");
}
// end view ==============================================================

// store data ==================================================
$(".close_openCreateCityModal").click(function(){
    $("#cityAdd").modal("hide");
});
$("#openCreateCityModal").click(function()
{
    $("#cityname").val("");
    $("#citydistrict").val("");
 });
$("#openCreateCityModal").click(function()
 {
   $("#citydistrict").html("");
   $("#cityname").html("");
   $.ajax({
         url: base_path+"/city-getDetails",
         type: "GET",
         success: function (data){
            $("#citydistrict").append(data);
         }
        });
   $("#cityAdd").modal("show");
 });
//start hide model========================================================
 $(".close_openCreateCityModal").click(function(){
    $("#cityAdd").modal("hide");
});

// store query start=======================================================
 $("#storeCity").click(function()
 {
    var _token=$("#token").val();
    var id=$("#citydistrict").val();
    var cityname =$("#cityname").val();
    var create_district=$("#citydistrict").val();
    if(cityname=="" || cityname==null)
    {
        alert("please fill city name");
        return false;
    }
    if(create_district=="" || create_district==null)
    {
        alert("please select District name");
        return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('cityname',cityname);
    formData.append('create_district',create_district);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/city-store",
        success:function(){
           alert("success data stored !");
           opencityModel();
           $("#cityAdd").modal("hide");
        }
    });
});
$(".close_openCreateCityModal").click(function(){
   $("#cityAdd").modal("hide");
});
//end store=====================================================

// delete query start=============================================================
$("body").on('click','#delete_city',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?'))
   {
        $.ajax({
            type:'get',
            data:{'id': id},
            url:base_path+"/city-delete",
            success:function(){
                alert("success data deleted !");
                opencityModel();
            }
        });
    }
});
// end delete query=====================================================

// start edit==============================================================
$("body").on('click','#edit_city',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        url:base_path+"/city-edit",
        data:{'id':id},
        success:function(res){
        $("#updatedistrict").html("");
            var districtL=res.district.length;
            var districtOp="";
            for(var i=0;i<districtL;i++)
            {
                var district_id=res.district[i].district_id;
                var district_name=res.district[i].district_name;
                districtOp+="<option value="+district_id+">"+district_name+"</option>";
            }
            $("#updatedistrict").append(districtOp);
            $("#cityidd").val(res.allData.city_id );
            $("#update_cityname").val(res.allData.city_name);
            $("#updatedistrict").val(res.allData.district_id);
        }
    });
    $("#UpdateCityModal").modal("show");
 });
$('#UpdateCityModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateCityModal").click(function(){
   $("#UpdateCityModal").modal("hide");
});
$("#update_storeCity").click(function(){
    var _token=$("#token").val();
    var id=$("#cityidd").val();
    var uid=$("#updatedistrict").val();
    var city_name =$("#update_cityname").val();
    var updatedistrict=$("#updatedistrict").val();
    var formData=new FormData();
    if(city_name=="" || city_name==null)
    {
      alert("please fill city name");
      return false;
    }
    if(updatedistrict=="" || updatedistrict==null)
    {
      alert("please select district name");
      return false;
    }
    formData.append('_token',_token);
    formData.append('id',id);
    formData.append('update_cityname',city_name);
    formData.append('updatedistrict',updatedistrict);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/city-update",
        success:function(){
            alert("success data Updated !");
            opencityModel();
            $("#UpdateCityModal").modal("hide");
        }
    });
 });
 // end update =========================================================   
          
      
  
