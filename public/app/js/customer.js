var base_path = $("#url").val();
$("#openCustomerModel").click(function(){
   $.ajax({
      type:'get',
      url:base_path+"/customer",
      success:function(res){
         alert("success");
      }
   })
   $("#customerModal").modal("show");
});