var base_path = $("#url").val();
// list data ==========================================================
$(".close_productModal").click(function(){
   $("#productModal").modal("hide");
});
function openProductModel()
{
   $("#product_datatable").html("");
   $.ajax({
      type:'get',
      url:base_path+"/product",
      success:function(res){
         $("#product_datatable").append(res);
      }
   });
   $("#productModal").modal("show");
}
// end list data =====================================================
// get Category details 
function getproductCategory(id ,from)
{
   $.ajax({
      type:'get',
      url:base_path+"/product-getCategoryDetails",
      data:{'from':from,'id':id},
      success:function(res){
         if(from=="category")
         {
            $("#product_baseProduct_name").html("");
            $("#product_baseProduct_name").append(res);
            $("#update_product_baseProduct_name").html("");
            $("#update_product_baseProduct_name").append(res);
         }
         if(from=="base_product")
         {
            $("#product_subProduct_name").html("");
            $("#product_subProduct_name").append(res);
            $("#update_product_subProduct_name").html("");
            $("#update_product_subProduct_name").append(res);
         }
      }
   });
}
// end category
// start store product ==================================================
$("#openCreateproductModal").click(function(){
   $("#product_UOM").html("");
   $("#product_country_a").html("");
   $("#product_country_b").html("");
   $("#product_country_c").html("");
   $("#product_category_name").html("");
   var from="open_from";
   $.ajax({
      type:'get',
      url:base_path+"/product-getCategoryDetails",
      data:{'from':from},
      success:function(res){
         $("#product_UOM").append(res.UOM);
         $("#product_country_a").append(res.country);
         $("#product_country_b").append(res.country);
         $("#product_country_c").append(res.country);
         $("#product_category_name").append(res.Category);
      }
   });
   $("#createProductModal").modal("show");
})
$('#createProductModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openCreateProductModal").click(function(){
   $("#createProductModal").modal("hide");
});
$("#storeProduct").click(function(){
   var _token=$("#token").val();
   var product_specific_name=$("#product_specific_name").val();
   var product_full_name=$("#product_full_name").val();
   var product_category_name=$("#product_category_name").val();
   var product_baseProduct_name=$("#product_baseProduct_name").val();
   var product_subProduct_name=$("#product_subProduct_name").val();
   var product_grades=$("#product_grades").val();
   var product_standards=$("#product_standards").val();
   var product_DimensionsProperties=$("#product_DimensionsProperties").val();
   var product_TechnicalSpecs=$("#product_TechnicalSpecs").val();
   var product_Applications=$("#product_Applications").val();
   var product_PriceStructure=$("#product_PriceStructure").val();
   var product_PackingMethod=$("#product_PackingMethod").val();
   var product_Weightcalculation=$("#product_Weightcalculation").val();
   var product_Comments=$("#product_Comments").val();
   var product_UOM=$("#product_UOM").val();
   var product_shipmentMode=$("#product_shipmentMode").val();
   var product_HSCode=$("#product_HSCode").val();
   var product_country_a=$("#product_country_a").val();
   var product_country_b=$("#product_country_b").val();
   var product_country_c=$("#product_country_c").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('product_specific_name',product_specific_name);
   formData.append('product_full_name',product_full_name);
   formData.append('product_category_name',product_category_name);
   formData.append('product_baseProduct_name',product_baseProduct_name);
   formData.append('product_subProduct_name',product_subProduct_name);
   formData.append('product_grades',product_grades);
   formData.append('product_grades',product_grades);
   formData.append('product_standards',product_standards);
   formData.append('product_DimensionsProperties',product_DimensionsProperties);
   formData.append('product_TechnicalSpecs',product_TechnicalSpecs);
   formData.append('product_Applications',product_Applications);
   formData.append('product_PriceStructure',product_PriceStructure);
   formData.append('product_PackingMethod',product_PackingMethod);
   formData.append('product_Weightcalculation',product_Weightcalculation);
   formData.append('product_Comments',product_Comments);
   formData.append('product_UOM',product_UOM);
   formData.append('product_shipmentMode',product_shipmentMode);
   formData.append('product_HSCode',product_HSCode);
   formData.append('product_country_a',product_country_a);
   formData.append('product_country_b',product_country_b);
   formData.append('product_country_c',product_country_c);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/product-store",
      success:function(){
         alert("success data stored !");
         openProductModel();
         $("#createProductModal").modal("hide");

      }
   })
})
// end store product ===================================================

//start edit product ===============================================
$("body").on('click','#edit_product',function(){
   $("#update_product_country_a").html("");
   $("#update_product_country_b").html("");
   $("#update_product_country_c").html("");
   $("#update_product_UOM").html(""); 
   $("#update_product_baseProduct_name").html("");
   $("#update_product_subProduct_name").html("");
   $("#update_product_category_name").html("");
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/product-edit",
      success:function(res){
         var category=res.category.length;
         var base_prod_data=res.base_prod_data.length;
         var sub_prod_data=res.sub_prod_data.length;
         var country_Data=res.country_Data.length;
         var UOM_data=res.UOM_data.length;
         var catOption="";
         var bProOption="";
         var sProOption="";
         var couOption="";
         var uomOption="";
         for(var i=0;category>i;i++)
         {
            var category_id=res.category[i].id;
            var category_name=res.category[i].category_name;
            catOption+="<option  value="+category_id+">"+category_name+"</option>";
            
         }
         $("#update_product_category_name").append(catOption);
         for(var i=0;base_prod_data>i;i++)
         {
            var base_prod_data_id=res.base_prod_data[i].id;
            var base_prod_data_name=res.base_prod_data[i].product_name;
            bProOption+="<option  value="+base_prod_data_id+">"+base_prod_data_name+"</option>";
            
         }
         $("#update_product_baseProduct_name").append(bProOption);
         for(var i=0;sub_prod_data>i;i++)
         {
            var sub_prod_data_id=res.sub_prod_data[i].id;
            var sub_prod_data_name=res.sub_prod_data[i].product_name;
            sProOption+="<option  value="+sub_prod_data_id+">"+sub_prod_data_name+"</option>";
            
         }
         $("#update_product_subProduct_name").append(sProOption);
         for(var i=0;country_Data>i;i++)
         {
            var country_Data_id=res.country_Data[i].id;
            var country_Data_name=res.country_Data[i].country_name;
            couOption+="<option  value="+country_Data_id+">"+country_Data_name+"</option>";
            
         }
         $("#update_product_country_a").append(couOption);
         $("#update_product_country_b").append(couOption);
         $("#update_product_country_c").append(couOption);
         for(var i=0;UOM_data>i;i++)
         {
            var UOM_data_id=res.UOM_data[i].id;
            var UOM_data_name=res.UOM_data[i].name;
            uomOption+="<option  value="+UOM_data_id+">"+UOM_data_name+"</option>";
            
         }
         $("#update_product_UOM").append(uomOption);
        $("#product_id").val(res.product_data.id);
        $("#update_product_specific_name").val(res.product_data.product_specific_name);
        $("#update_product_full_name").val(res.product_data.product_full_name);
        $("#update_product_category_name").val(res.product_data.category_id);
        $("#update_product_baseProduct_name").val(res.product_data.base_product_id);
        $("#update_product_subProduct_name").val(res.product_data.sub_product_id);
        $("#update_product_grades").val(res.product_data.grades);
        $("#update_product_standards").val(res.product_data.standard);
        $("#update_product_DimensionsProperties").val(res.product_data.propertie);
        $("#update_product_TechnicalSpecs").val(res.product_data.technical_specs);
        $("#update_product_Applications").val(res.product_data.application);
        $("#update_product_PriceStructure").val(res.product_data.price_structure);
        $("#update_product_PackingMethod").val(res.product_data.packing_method);
        $("#update_product_Weightcalculation").val(res.product_data.weight_calculation);
        $("#update_product_Comments").val(res.product_data.description);
        $("#update_product_UOM").val(res.product_data.umos_id);
        $("#update_product_shipmentMode").val(res.product_data.shipment_mode);
        $("#update_product_HSCode").val(res.product_data.hs_code);
        $("#update_product_country_a").val(res.product_data.country_a);
        $("#update_product_country_b").val(res.product_data.country_b);
        $("#update_product_country_c").val(res.product_data.country_c);
       
      }
   });
   $("#updateProductModal").modal("show");
});
$('#updateProductModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_openupdateProductModal").click(function(){
   $("#updateProductModal").modal("hide");
});
$("#update_Product").click(function(){
   var _token=$("#token").val();
   var id=$("#product_id").val();
   var product_specific_name=$("#update_product_specific_name").val();
   var product_full_name=$("#update_product_full_name").val();
   var product_category_name=$("#update_product_category_name").val();
   var product_baseProduct_name=$("#update_product_baseProduct_name").val();
   var product_subProduct_name=$("#update_product_subProduct_name").val();
   var product_grades=$("#update_product_grades").val();
   var product_standards=$("#update_product_standards").val();
   var product_DimensionsProperties=$("#update_product_DimensionsProperties").val();
   var product_TechnicalSpecs=$("#update_product_TechnicalSpecs").val();
   var product_Applications=$("#update_product_Applications").val();
   var product_PriceStructure=$("#update_product_PriceStructure").val();
   var product_PackingMethod=$("#update_product_PackingMethod").val();
   var product_Weightcalculation=$("#update_product_Weightcalculation").val();
   var product_Comments=$("#update_product_Comments").val();
   var product_UOM=$("#update_product_UOM").val();
   var product_shipmentMode=$("#update_product_shipmentMode").val();
   var product_HSCode=$("#update_product_HSCode").val();
   var product_country_a=$("#update_product_country_a").val();
   var product_country_b=$("#update_product_country_b").val();
   var product_country_c=$("#update_product_country_c").val();
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('id',id);
   formData.append('product_specific_name',product_specific_name);
   formData.append('product_full_name',product_full_name);
   formData.append('product_category_name',product_category_name);
   formData.append('product_baseProduct_name',product_baseProduct_name);
   formData.append('product_subProduct_name',product_subProduct_name);
   formData.append('product_grades',product_grades);
   formData.append('product_grades',product_grades);
   formData.append('product_standards',product_standards);
   formData.append('product_DimensionsProperties',product_DimensionsProperties);
   formData.append('product_TechnicalSpecs',product_TechnicalSpecs);
   formData.append('product_Applications',product_Applications);
   formData.append('product_PriceStructure',product_PriceStructure);
   formData.append('product_PackingMethod',product_PackingMethod);
   formData.append('product_Weightcalculation',product_Weightcalculation);
   formData.append('product_Comments',product_Comments);
   formData.append('product_UOM',product_UOM);
   formData.append('product_shipmentMode',product_shipmentMode);
   formData.append('product_HSCode',product_HSCode);
   formData.append('product_country_a',product_country_a);
   formData.append('product_country_b',product_country_b);
   formData.append('product_country_c',product_country_c);
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/product-update",
      success:function(){
         alert("success data updated !");
         openProductModel();
         $("#updateProductModal").modal("hide");

      }
   })
});
// end edit product ================================================

// start view data ==================================================
$("body").on('click','#view_product',function(){
   var id=$(this).attr('data-value');
   $.ajax({
      type:'get',
      data:{'id':id},
      url:base_path+"/product-view",
      success:function(res){
         alert(res.product_specific_name);
        $("#pro_specificName").text(res.product_specific_name);
        $("#pro_fullName").text(res.product_full_name);
        $("#pro_Category_name").text(res.category_name);
        $("#pro_basePro_name").text(res.base_product_name);
        $("#pro_subPro_name").text(res.sub_product_name);
        $("#pro_grades_view").text(res.grades);
        $("#pro_standards_name").text(res.standard);
        $("#pro_dimen_properties").text(res.propertie);
        $("#pro_tecnicalSpView").text(res.technical_specs);
        $("#pro_applicationVIew").text(res.application);
        $("#pro_priceStrucVIew").text(res.price_structure);
        $("#pro_packingMeVIew").text(res.packing_method);
        $("#pro_weightCalVIew").text(res.weight_calculation);
        $("#pro_commentsVIew").text(res.description);
        $("#pro_uomVIew").text(res.uoms_name);
        $("#pro_shipmentmoVIew").text(res.shipment_mode);
        $("#pro_HsCodeVIew").text(res.hs_code);
        $("#pro_countryAVIew").text(res.countryA);
        $("#pro_countryBVIew").text(res.countryB);
        $("#pro_countryCVIew").text(res.countryC);
      }
   });
  
   $("#productDetailsviewModal").modal("show");
});
$(".close_productModalview").click(function(){
   $("#productDetailsviewModal").modal("hide");
});

// end view data ====================================================

// start delete product ===============================================
$("body").on('click','#delete_product',function(){
   var id=$(this).attr('data-value');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/product-delete",
         success:function(){
            alert("success data deleted !");
            openProductModel();
         }
      });
   }
});
// end delete product ===================================================