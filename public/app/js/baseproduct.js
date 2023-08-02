var base_path = $("#url").val();
// view data ===============================================
$(".close_baseproductModal").click(function(){
    $("#baseproductModal").modal("hide");
});
function openbaseproductModel()
{
    $.ajax({
       type:'get',
       url:base_path+"/baseproduct",
       success:function(res){
          $("#baseproduct_datatable").html(res);
       }
    });
    $("#baseproductModal").modal("show");
 }
// end view ==============================================================
 
// store data ==================================================
$(".close_openCreateBaseproductModal").click(function(){
    $("#baseproductAdd").modal("hide");
});
$("#openCreateBaseProductModal").click(function(){
  $("#baseproductname").val("");
  $("#baseproductcategory").val("");
 });
$("#openCreateBaseProductModal").click(function(){ 
   $("#baseproductname").html("");
   $("#baseproductcategory").html("");
   $.ajax({
        url: base_path+"/baseproduct-getDetails",
        type: "GET",
        success: function (data){
          $("#baseproductcategory").append(data);
         }
        });
   $("#baseproductAdd").modal("show");
 });
 $(".close_openCreateBaseproductModal").click(function(){
    $("#baseproductAdd").modal("hide");
});
// store query start=======================================================
 $("#storeBaseproduct").click(function(){
    var _token=$("#token").val();
    var id=$("#baseproductcategory").val();
    var baseproductname =$("#baseproductname").val();
    var create_category=$("#baseproductcategory").val();
    if(baseproductname=="" || baseproductname==null)
    {
       alert("please fill product name");
       return false;
    }
    if(create_category=="" || create_category==null)
    {
    alert("please select Category name");
    return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('baseproductname',baseproductname);
    formData.append('create_category',create_category);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/baseproduct-store",
        success:function(){
           alert("success data stored !");
           openbaseproductModel();
           $("#baseproductAdd").modal("hide");
        }
    });
});
$(".close_openCreateBaseproductModal").click(function(){
   $("#baseproductAdd").modal("hide");
});
//end store

// delete query start=============================================================
$("body").on('click','#delete_baseproduct',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')){
      $.ajax({
            type:'get',
            data:{'id': id},
            url:base_path+"/baseproduct-delete",
            success:function(){
                alert("success data deleted !");
                openbaseproductModel();
            }
        });
    }
});
// end delete query

// start edit==============================================================
$("body").on('click','#edit_baseproduct',function(){
    var id=$(this).attr('data-value');
    $.ajax({
        type:'get',
        url:base_path+"/baseproduct-edit",
        data:{'id':id},
        success:function(res){
            $("#updatecategory").html("");//for remove repeat list
            var categoryL=res.category.length;
            var categoryOp="";
            for(var i=0;i<categoryL;i++)
            {
                var id=res.category[i].id;
                var category_name=res.category[i].category_name;
                categoryOp+="<option value="+id+">"+category_name+"</option>";
            }
            $("#updatecategory").append(categoryOp);
            $("#baseproductid").val(res.allData.id);
            $("#update_productname").val(res.allData.product_name);
            $("#updatecategory").val(res.allData.category_id);
        }
    });
    $("#UpdateBaseproductModal").modal("show");
});
$('#UpdateBaseproductModal').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
});
$(".close_openUpdateBaseproductModal").click(function(){
    $("#UpdateBaseproductModal").modal("hide");
});
$("#update_baseproductCity").click(function(){
    var _token=$("#token").val();
    var id=$("#baseproductid").val();
    var product_name =$("#update_productname").val();
    var updatecategory=$("#updatecategory").val();
    var formData=new FormData();
    if(product_name==""|| product_name==null)
    {
      alert("please fill product name");
      return false;
    }
    if(updatecategory==""|| updatecategory==null)
    {
      alert("please select category name");
      return false;
    }
    formData.append('_token',_token);
    formData.append('id',id);
    formData.append('update_productname',product_name );
    formData.append('updatecategory',updatecategory);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/baseproduct-update",
        success:function(){
            alert("success data Updated !");
            openbaseproductModel();
            $("#UpdateBaseproductModal").modal("hide");
        }
    });
 });
 // end update =======================================================
