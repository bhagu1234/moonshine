var base_path = $("#url").val();
// list data ==========================================================
// $(".close_contactModal").click(function(){
//    $("#contactModal").modal("hide");
// });
// function openContactModel()
// {
//    $("#contact_datatable").html("");
//    $.ajax({
//       type:'get',
//       url:base_path+"/contact",
//       success:function(res){
//          $("#contact_datatable").append(res);
//       }
//    });
//    $("#contactModal").modal("show");
// }


// end list data =====================================================

// start store contact ==================================================

$("#openCreatecontactModal").click(function(){
    $("#contactSalute").html("");
    $("#contactPOC").html("");
    $("#contactSection").html("");
    $("#contactNationality").html("");
    $("#contactMotherTongue").html("");
    $("#contactReligion").html("");
    $("#contactCustomer").html("");
    $.ajax({
        type:'get',
        url:base_path+"/contact-create",
        success:function(res){
            $("#contactSalute").append(res.saluteOp);
            $("#contactPOC").append(res.pocOp);
            $("#contactStatus").append(res.statusOp);
            $("#contactSection").append(res.sectionOp);
            $("#contactNationality").append(res.countryOp);
            $("#contactMotherTongue").append(res.languageOp);
            $("#contactReligion").append(res.religionOp);
            $("#contactCustomer").append(res.customeOp);
        }
    });
   $("#createcontactModal").modal("show");
});
$("#createcontactModal").on("shown.bs.modal",function(){
   $(this).hide().show(); 
});
$(".close_openCreatecontactModal").click(function(){
   $("#createcontactModal").modal("hide");
});
$('#createcontactModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$("#storecontact").click(function(){
   var _token=$("#token").val();
   var contactSalute=$("#contactSalute").val();
   var contactFirstName=$("#contactFirstName").val();
   var contactMinddleName=$("#contactMinddleName").val();
   var contactLastName=$("#contactLastName").val();
   var contactPOC=$("#contactPOC").val();
   var contactStatus=$("#contactStatus").val();
   var contactSection=$("#contactSection").val();
   var contactDesignation=$("#contactDesignation").val();
   var contactSittingOffice=$("#contactSittingOffice").val();
   var contactKickback=$("#contactKickback").val();
   var contactOfficialBg=$("#contactOfficialBg").val();
   var contactMobilePhone=$("#contactMobilePhone").val();
   var contactLandlineOffice=$("#contactLandlineOffice").val();
   var contactEmail1=$("#contactEmail1").val();
   var contactEmail2=$("#contactEmail2").val();
   var contactPersonalEmail=$("#contactPersonalEmail").val();
   var contactSkypeOthers=$("#contactSkypeOthers").val();
   var contactDOB=$("#contactDOB").val();
   var contactAge=$("#contactAge").val();
   var contactNationality=$("#contactNationality").val();
   var contactMotherTongue=$("#contactMotherTongue").val();
   var contactReligion=$("#contactReligion").val();
   var contactGender=$("#contactGender").val();
   var contactLivingin=$("#contactLivingin").val();
   var contactCharacterPecularities=$("#contactCharacterPecularities").val();
   var contactPersonalBg=$("#contactPersonalBg").val();
   var contactPassportDetails=$("#contactPassportDetails").val();
   var contactPassportNumber=$("#contactPassportNumber").val();
   var contactPassportIssuedAt=$("#contactPassportIssuedAt").val();
   var contactPassportIssuedDate=$("#contactPassportIssuedDate").val();
   var contactPassportExpiryDate=$("#contactPassportExpiryDate").val();
   var contactVisaDetails=$("#contactVisaDetails").val();
   var contactDateJoined=$("#contactDateJoined").val();
   var contactDateLeft=$("#contactDateLeft").val();
   var contactCustomer=$("#contactCustomer").val();
  
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('contactFirstName',contactFirstName);
   formData.append('contactSalute',contactSalute);
   formData.append('contactMinddleName',contactMinddleName);
   formData.append('contactLastName',contactLastName);
   formData.append('contactPOC',contactPOC);
   formData.append('contactStatus',contactStatus);
   formData.append('contactSection',contactSection);
   formData.append('contactDesignation',contactDesignation);
   formData.append('contactSittingOffice',contactSittingOffice);
   formData.append('contactKickback',contactKickback);
   formData.append('contactOfficialBg',contactOfficialBg);
   formData.append('contactMobilePhone',contactMobilePhone);
   formData.append('contactLandlineOffice',contactLandlineOffice);
   formData.append('contactEmail1',contactEmail1);
   formData.append('contactEmail2',contactEmail2);
   formData.append('contactPersonalEmail',contactPersonalEmail);
   formData.append('contactSkypeOthers',contactSkypeOthers);
   formData.append('contactDOB',contactDOB);
   formData.append('contactAge',contactAge);
   formData.append('contactNationality',contactNationality);
   formData.append('contactMotherTongue',contactMotherTongue);
   formData.append('contactReligion',contactReligion);
   formData.append('contactGender',contactGender);
   formData.append('contactLivingin',contactLivingin);
   formData.append('contactCharacterPecularities',contactCharacterPecularities);
   formData.append('contactPersonalBg',contactPersonalBg);
   formData.append('contactPassportDetails',contactPassportDetails);
   formData.append('contactPassportNumber',contactPassportNumber);
   formData.append('contactPassportIssuedAt',contactPassportIssuedAt);
   formData.append('contactPassportIssuedDate',contactPassportIssuedDate);
   formData.append('contactPassportExpiryDate',contactPassportExpiryDate);
   formData.append('contactVisaDetails',contactVisaDetails);
   formData.append('contactDateJoined',contactDateJoined);
   formData.append('contactDateLeft',contactDateLeft);
   formData.append('contactCustomer',contactCustomer);
  
   $.ajax({
      type:'POST',
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      data:formData,
      url:base_path+"/contact-store",
      success:function(){
         alert("success data stored !");
         view_customer(contactCustomer);
         $("#createcontactModal").modal("hide");
      }
   })
})
// end store contact ===================================================

// //start edit contact ===============================================
// $("body").on('click','#contact_edit',function(){
//    var id=$(this).attr('data-value');
//     $.ajax({
//         type:'get',
//         data:{'id':id},
//         url:base_path+"/contact-edit",
//         success:function(res){
//             $("#contact_id").val(res.id);
//             $("#update_contact_name").val(res.contact_name);       
//         }
//    });
//    $("#UpdatecontactModal").modal("show");
// });
// $('#UpdatecontactModal').on('hidden.bs.modal', function () {
//    $(this).find('form').trigger('reset');
// });
// $(".close_openUpdatecontactModal").click(function(){
//    $("#UpdatecontactModal").modal("hide");
// });
// $("#updatcontact").click(function(){
//    var _token=$("#token").val();
//    var id=$("#contact_id").val();
//    var contact_name=$("#update_contact_name").val();
//    var formData=new FormData();
//    formData.append('_token',_token);
//    formData.append('contact_name',contact_name);
//    formData.append('id',id);
//    $.ajax({
//       type:'POST',
//       processData: false,
//       contentType: false,
//       cache: false,
//       async: false,
//       data:formData,
//       url:base_path+"/contact-update",
//       success:function(){
//          alert("success data Updated !");
//          opencontactModel();
//          $("#UpdatecontactModal").modal("hide");

//         }
//    });
// });
// end edit contact ================================================

// start delete contact ===============================================
$("body").on('click','#delete_customer_contact',function(){
   var id=$(this).attr('data-value');
   var cu_id=$(this).attr('data-customer');
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/contact-delete",
         success:function(){
            alert("success data deleted !");
            view_customer(cu_id);
         }
      });
   }
});
// end delete contact ===================================================