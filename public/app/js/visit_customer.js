var base_path = $("#url").val();
// list data ==========================================================
$(".close_VisitCustomerModal").click(function(){
   $("#VisitCustomerModal").modal("hide");
});
function visit_customerView()
{
   $("#VisitCustomer_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/visit_customer",
      success:function(res){
         $("#VisitCustomer_datatable").append(res);
      }
   });
   $("#VisitCustomerModal").modal("show");
}


// end list data =====================================================

// // start store category ==================================================

// $("#openCreateVisitCustomerModal").click(function(){
//    $("#createcategoryModal").modal("show");
// });
// $("#createcategoryModal").on("shown.bs.modal",function(){
//    $(this).hide().show(); 
// });
// $(".close_openCreatecategoryModal").click(function(){
//    $("#createcategoryModal").modal("hide");
// });
// $('#createcategoryModal').on('hidden.bs.modal', function () {
//    $(this).find('form').trigger('reset');
// });
// $("#storecategory").click(function(){
//    var _token=$("#token").val();
//    var category_name=$("#category_name").val();
//    if(category_name=="" || category_name==null)
//    {
//       alert("please fill category name !");
//       return false;
//    }
//    var formData=new FormData();
//    formData.append('_token',_token);
//    formData.append('category_name',category_name);
  
//    $.ajax({
//       type:'POST',
//       processData: false,
//       contentType: false,
//       cache: false,
//       async: false,
//       data:formData,
//       url:base_path+"/category-store",
//       success:function(){
//          alert("success data stored !");
//          openCategoryModel();
//          $("#createcategoryModal").modal("hide");
//       }
//    })
// })
// // end store category ===================================================

// //start edit category ===============================================
// $("body").on('click','#category_edit',function(){
//    var id=$(this).attr('data-value');
//     $.ajax({
//         type:'get',
//         data:{'id':id},
//         url:base_path+"/category-edit",
//         success:function(res){
//             $("#category_id").val(res.id);
//             $("#update_category_name").val(res.category_name);       
//         }
//    });
//    $("#UpdatecategoryModal").modal("show");
// });
// $('#UpdatecategoryModal').on('hidden.bs.modal', function () {
//    $(this).find('form').trigger('reset');
// });
// $(".close_openUpdatecategoryModal").click(function(){
//    $("#UpdatecategoryModal").modal("hide");
// });
// $("#updatCategory").click(function(){
//    var _token=$("#token").val();
//    var id=$("#category_id").val();
//    var category_name=$("#update_category_name").val();
//    if(category_name=="" || category_name==null)
//    {
//       alert("please fill category name !");
//       return false;
//    }
//    var formData=new FormData();
//    formData.append('_token',_token);
//    formData.append('category_name',category_name);
//    formData.append('id',id);
//    $.ajax({
//       type:'POST',
//       processData: false,
//       contentType: false,
//       cache: false,
//       async: false,
//       data:formData,
//       url:base_path+"/category-update",
//       success:function(){
//          alert("success data Updated !");
//          openCategoryModel();
//          $("#UpdatecategoryModal").modal("hide");

//         }
//    });
// });
// // end edit category ================================================

// // start delete category ===============================================
// $("body").on('click','#category_delete',function(){
//    var id=$(this).attr('data-value');
//    if (confirm('Are you sure you want to delete this?')) 
//    {
//       $.ajax({
//          type:'get',
//          data:{'id':id},
//          url:base_path+"/category-delete",
//          success:function(){
//             alert("success data deleted !");
//             openCategoryModel();
//          }
//       });
//    }
// });
// // end delete category ===================================================