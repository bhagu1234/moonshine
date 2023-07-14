var base_path = $("#url").val();
// view data ==========================================================
$("#openCustomerModel").click(function(){
   $.ajax({
      type:'get',
      url:base_path+"/customer",
      success:function(res){
         $("#customer_datatable").html(res);
      }
   })
   $("#customerModal").modal("show");
});
$(".close_customerModal").click(function(){
   $("#customerModal").modal("hide");
})
// end view data =====================================================