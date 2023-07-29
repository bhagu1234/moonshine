var base_path = $("#url").val();
// start store bank ==================================================

$(".openCreatebankModal").click(function(){
   $("#createbankModal").modal("show");
});
$("#createbankModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
});
$(".close_opencreatebankModal").click(function(){
   $("#createbankModal").modal("hide");
});
$('#createbankModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$("#storeBank").click(function(){
   var _token=$("#token").val();
   var check_sup_cus= $("#check_suppliyer_customer").val();
   var bankCustomer=$("#bankCustomer").val();
   var create_bankNameCustomer=$("#create_bankNameCustomer").val();
   var create_BranchNameCustomer=$("#create_BranchNameCustomer").val();
   var create_bankAddressCustomer=$("#create_bankAddressCustomer").val();
   var create_AccountNumberCustomer=$("#create_AccountNumberCustomer").val();
   var create_IBANAccountNumberCustomer=$("#create_IBANAccountNumberCustomer").val();
   var create_AccountHolderCustomer=$("#create_AccountHolderCustomer").val();
   var create_pr_officerCustomer=$("#create_pr_officerCustomer").val();
   var create_BankEmailCustomer=$("#create_BankEmailCustomer").val();
   var create_IFSC_codeCustomer=$("#create_IFSC_codeCustomer").val();
   var create_SWIFT_codeCustomer=$("#create_SWIFT_codeCustomer").val();
   var create_bankRatingCustomer=$("#create_bankRatingCustomer").val();
   var create_directFacCustomer=$("#create_directFacCustomer").val();
   var create_IndirectFacCustomer=$("#create_IndirectFacCustomer").val();
   var create_bankReferenceCustomer=$("#create_bankReferenceCustomer").val();
   var create_CommentsCustomer=$("#create_CommentsCustomer").val();
   if(create_bankNameCustomer=="" || create_bankNameCustomer==null)
   {
      alert("please fill bank name !!");
      return false
   }
   if(create_BranchNameCustomer=="" || create_BranchNameCustomer==null)
   {
      alert("please fill Brach name !!");
      return false
   }
   if(create_bankAddressCustomer=="" || create_bankAddressCustomer==null)
   {
      alert("please fill bank address !!");
      return false
   }
   if(create_AccountHolderCustomer=="" || create_AccountHolderCustomer==null)
   {
      alert("please fill Account holder name !!");
      return false
   }
   if(create_IFSC_codeCustomer=="" || create_IFSC_codeCustomer==null)
   {
      alert("please fill IFSC code !!");
      return false
   }
   if(create_AccountNumberCustomer=="" || create_AccountNumberCustomer==null)
   {
      alert("please fill account number");
      return false
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('check_sup_cus',check_sup_cus);
   formData.append('bankCustomer',bankCustomer);
   formData.append('create_bankNameCustomer',create_bankNameCustomer);
   formData.append('create_BranchNameCustomer',create_BranchNameCustomer);
   formData.append('create_bankAddressCustomer',create_bankAddressCustomer);
   formData.append('create_AccountNumberCustomer',create_AccountNumberCustomer);
   formData.append('create_IBANAccountNumberCustomer',create_IBANAccountNumberCustomer);
   formData.append('create_AccountHolderCustomer',create_AccountHolderCustomer);
   formData.append('create_pr_officerCustomer',create_pr_officerCustomer);
   formData.append('create_BankEmailCustomer',create_BankEmailCustomer);
   formData.append('create_IFSC_codeCustomer',create_IFSC_codeCustomer);
   formData.append('create_SWIFT_codeCustomer',create_SWIFT_codeCustomer);
   formData.append('create_bankRatingCustomer',create_bankRatingCustomer);
   formData.append('create_directFacCustomer',create_directFacCustomer);
   formData.append('create_IndirectFacCustomer',create_IndirectFacCustomer);
   formData.append('create_bankReferenceCustomer',create_bankReferenceCustomer);
   formData.append('create_CommentsCustomer',create_CommentsCustomer);
    $.ajax({
        type:'POST',
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        data:formData,
        url:base_path+"/bank-store",
        success:function(){
            alert("success data stored !");
            if(check_sup_cus=='customer')
            {
                view_customer(bankCustomer);
            }
            else
            {
                view_Supplier(bankCustomer);
            }
            $("#createbankModal").modal("hide");
        }
    })
})
// end store contact ===================================================

// //start edit contact ===============================================
$("body").on('click','.edit_bank_customer',function(){
   var id=$(this).attr('data-value');
   var customerId=$(this).attr('data-customer');
    $.ajax({
        type:'get',
        data:{'id':id,'customerId':customerId},
        url:base_path+"/bank-edit",
        success:function(res){
            var check_sup_cus= $("#check_suppliyer_customer").val();
            if(check_sup_cus=='customer')
            {
               $("#update_bankCustomer").val(res.customer_id);
            }
            else
            {
               $("#update_bankCustomer").val(res.supplier_id);
            }
           $("#update_bankid").val(res.id);
           $("#update_bankNameCustomer").val(res.bank_name);
           $("#update_BranchNameCustomer").val(res.branch_name);
           $("#update_bankAddressCustomer").val(res.bank_address);
           $("#update_AccountNumberCustomer").val(res.account_number);
           $("#update_IBANAccountNumberCustomer").val(res.iban_account_number);
           $("#update_AccountHolderCustomer").val(res.account_holder_name);
           $("#update_pr_officerCustomer").val(res.pr_officer);
           $("#update_BankEmailCustomer").val(res.bank_email_id);
           $("#update_IFSC_codeCustomer").val(res.IFSC_code);
           $("#update_SWIFT_codeCustomer").val(res.SWIFT_code);
           $("#update_bankRatingCustomer").val(res.bank_rating);
           $("#update_directFacCustomer").val(res.direct_fac);
           $("#update_IndirectFacCustomer").val(res.indirect_fac);
           $("#update_bankReferenceCustomer").val(res.bank_reference);
           $("#update_CommentsCustomer").val(res.comments);
        }
   });
   $("#updatebankModal").modal("show");
});
$('#updatebankModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_open_update_bankModal").click(function(){
   $("#updatebankModal").modal("hide");
});
$("#updateBank").click(function(){
    var _token=$("#token").val();
    var check_sup_cus= $("#check_suppliyer_customer").val();
    var bankCustomer=$("#update_bankCustomer").val();
    var id=$("#update_bankid").val();
    var create_bankNameCustomer=$("#update_bankNameCustomer").val();
    var create_BranchNameCustomer=$("#update_BranchNameCustomer").val();
    var create_bankAddressCustomer=$("#update_bankAddressCustomer").val();
    var create_AccountNumberCustomer=$("#update_AccountNumberCustomer").val();
    var create_IBANAccountNumberCustomer=$("#update_IBANAccountNumberCustomer").val();
    var create_AccountHolderCustomer=$("#update_AccountHolderCustomer").val();
    var create_pr_officerCustomer=$("#update_pr_officerCustomer").val();
    var create_BankEmailCustomer=$("#update_BankEmailCustomer").val();
    var create_IFSC_codeCustomer=$("#update_IFSC_codeCustomer").val();
    var create_SWIFT_codeCustomer=$("#update_SWIFT_codeCustomer").val();
    var create_bankRatingCustomer=$("#update_bankRatingCustomer").val();
    var create_directFacCustomer=$("#update_directFacCustomer").val();
    var create_IndirectFacCustomer=$("#update_IndirectFacCustomer").val();
    var create_bankReferenceCustomer=$("#update_bankReferenceCustomer").val();
    var create_CommentsCustomer=$("#update_CommentsCustomer").val();
    if(create_bankNameCustomer=="" || create_bankNameCustomer==null)
   {
      alert("please fill bank name !!");
      return false
   }
   if(create_BranchNameCustomer=="" || create_BranchNameCustomer==null)
   {
      alert("please fill Brach name !!");
      return false
   }
   if(create_bankAddressCustomer=="" || create_bankAddressCustomer==null)
   {
      alert("please fill bank address !!");
      return false
   }
   if(create_AccountHolderCustomer=="" || create_AccountHolderCustomer==null)
   {
      alert("please fill Account holder name !!");
      return false
   }
   if(create_IFSC_codeCustomer=="" || create_IFSC_codeCustomer==null)
   {
      alert("please fill IFSC code !!");
      return false
   }
   if(create_AccountNumberCustomer=="" || create_AccountNumberCustomer==null)
   {
      alert("please fill account number");
      return false
   }
    var formData=new FormData();
    formData.append('_token',_token);
    formData.append('check_sup_cus',check_sup_cus);
    formData.append('bankCustomer',bankCustomer);
    formData.append('id',id);
    formData.append('create_bankNameCustomer',create_bankNameCustomer);
    formData.append('create_BranchNameCustomer',create_BranchNameCustomer);
    formData.append('create_bankAddressCustomer',create_bankAddressCustomer);
    formData.append('create_AccountNumberCustomer',create_AccountNumberCustomer);
    formData.append('create_IBANAccountNumberCustomer',create_IBANAccountNumberCustomer);
    formData.append('create_AccountHolderCustomer',create_AccountHolderCustomer);
    formData.append('create_pr_officerCustomer',create_pr_officerCustomer);
    formData.append('create_BankEmailCustomer',create_BankEmailCustomer);
    formData.append('create_IFSC_codeCustomer',create_IFSC_codeCustomer);
    formData.append('create_SWIFT_codeCustomer',create_SWIFT_codeCustomer);
    formData.append('create_bankRatingCustomer',create_bankRatingCustomer);
    formData.append('create_directFacCustomer',create_directFacCustomer);
    formData.append('create_IndirectFacCustomer',create_IndirectFacCustomer);
    formData.append('create_bankReferenceCustomer',create_bankReferenceCustomer);
    formData.append('create_CommentsCustomer',create_CommentsCustomer);
     $.ajax({
         type:'POST',
         processData: false,
         contentType: false,
         cache: false,
         async: false,
         data:formData,
         url:base_path+"/bank-update",
         success:function(){
             alert("success data update !");
             if(check_sup_cus=='customer')
             {
               view_customer(bankCustomer);
             }
            else
            {
               view_Supplier(bankCustomer);
            }
             $("#updatebankModal").modal("hide");
         }
     })
});
// end edit bank ================================================

// start delete bank ===============================================
$("body").on('click','.delete_bank_customer',function(){
   var check_sup_cus= $("#check_suppliyer_customer").val();
   var id=$(this).attr('data-value');
   var cu_id=$(this).attr('data-customer');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/bank-delete",
         success:function(){
            alert("success data deleted !");
            alert("success data update !");
             if(check_sup_cus=='customer')
             {
               view_customer(cu_id);
             }
            else{
               view_Supplier(cu_id);
            }
         }
      });
   }
});
// end delete bank ===================================================