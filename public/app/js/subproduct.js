var base_path = $("#url").val();
// view data ===============================================
$(".close_subproductModal").click(function(){
    $("#subproductModal").modal("hide");
});
 function opensubproductModel(){
    $.ajax({
       type:'get',
       url:base_path+"/subproduct",
       success:function(res){
          $("#subproduct_datatable").html(res);
       }
    });
    $("#subproductModal").modal("show");
 }
// end view ==============================================================

// store data in table==================================================
$(".close_openCreateSubproductModal").click(function(){
    $("#subproductAdd").modal("hide");
});
$("#openCreateSubProductModal").click(function(){
  $("#subproductname").val("");
  $("#baseproduct").val("");
});
$("#openCreateSubProductModal").click(function(){ 
   $("#subproductname").html("");
   $("#baseproduct").html("");
   $.ajax({
        url: base_path+"/subproduct-getDetails",
        type: "GET",
        success: function (data){
          $("#baseproduct").append(data);
        }
        });
   $("#subproductAdd").modal("show");
});
 $(".close_openCreateSubproductModal").click(function(){
    $("#subproductAdd").modal("hide");
});

// store query start=======================================================
$("#storeSubproduct").click(function(){
    var _token=$("#token").val();
    var id=$("#baseproduct").val();
    var subproductname =$("#subproductname").val();
    var create_baseproduct=$("#baseproduct").val();
    if(subproductname=="" || subproductname==null)
    {
      alert("please fill product name");
      return false;
    }
    if(create_baseproduct=="" || create_baseproduct==null)
    {
     alert("please select Base Product name");
     return false;
    }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('subproductname',subproductname);
    formData.append('create_baseproduct',create_baseproduct);
    $.ajax({
       type:'POST',
       processData: false,
       contentType: false,
       cache: false,
       async: false,
       data:formData,
       url:base_path+"/subproduct-store",
       success:function(){
          alert("success data stored !");
          opensubproductModel();
          $("#subproductAdd").modal("hide");
       }
    });
});
$(".close_openCreateSubproductModal").click(function(){
  $("#subproductAdd").modal("hide");
});
//end store

// delete query start=============================================================
$("body").on('click','#delete_subproduct',function(){
    var id=$(this).attr('data-value');
    if (confirm('Are you sure you want to delete this?')){
       $.ajax({
        type:'get',
        data:{'id': id},
        url:base_path+"/subproduct-delete",
        success:function(){
             alert("success data deleted !");
             opensubproductModel();
        }
 });
    }
});
// end delete query
 
// start edit==============================================================
$("body").on('click','#edit_subproduct',function(){
    var id=$(this).attr('data-value');
    $.ajax({
      type:'get',
      url:base_path+"/subproduct-edit",
      data:{'id':id},
      success:function(res){
        $("#updatebaseproduct").html("");//for remove repeat list
        var baseproductL=res.baseproduct.length;
        var baseproductOp="";
        for(var i=0;i<baseproductL;i++)
        {
           var id=res.baseproduct[i].id;
           var product_name=res.baseproduct[i].product_name;
           baseproductOp+="<option value="+id+">"+product_name+"</option>";
        }
        $("#updatebaseproduct").append(baseproductOp);
        $("#subproductid").val(res.allData.id);
        $("#update_product").val(res.allData.product_name);
        $("#updatebaseproduct").val(res.allData.base_product_id);
        }
    });
     $("#UpdateSubproductModal").modal("show");
 });
// end edit
$('#UpdateSubproductModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openUpdateSubproductModal").click(function(){
   $("#UpdateSubproductModal").modal("hide");
});

// update start=================================================================
$("#update_subproductCity").click(function(){
    var _token=$("#token").val();
    var id=$("#subproductid").val();
    var product_name =$("#update_product").val();
    var updatebaseproduct=$("#updatebaseproduct").val();
    var formData=new FormData();
    if(product_name==""|| product_name==null)
    {
      alert("please fill product name");
      return false;
    }
    if(updatebaseproduct==""|| updatebaseproduct==null)
    {
      alert("please select base product name");
      return false;
    }
    formData.append('_token',_token);
    formData.append('id',id);
    formData.append('update_product',product_name);
    formData.append('updatebaseproduct',updatebaseproduct);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/subproduct-update",
        success:function(){
            alert("success data Updated !");
            opensubproductModel();
            $("#UpdateSubproductModal").modal("hide");
        }
    });
 });
// end update 
 