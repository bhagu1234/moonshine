var base_path = $("#url").val();
// start store contact ==================================================

$(".openCreatecontactModal").click(function(){
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
   var check_sup_cus= $("#check_suppliyer_customer").val();
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
   if(contactSalute=="" || contactSalute==null)
   {
      alert("please select Salute");
      return false;
   }
   if(contactFirstName=="" || contactFirstName==null)
   {
      alert("please Fill first name");
      return false;
   }
   if(contactLastName=="" || contactLastName==null)
   {
      alert("please fill last name");
      return false;
   }
   if(contactPOC=="" || contactPOC==null)
   {
      alert("please select POC");
      return false;
   }
   if(contactStatus=="" || contactStatus==null)
   {
      alert("please select Status");
      return false;
   }
   if(contactSection=="" || contactSection==null)
   {
      alert("please select Section");
      return false;
   }
   if(contactNationality=="" || contactNationality==null)
   {
      alert("please select Nationality");
      return false;
   }
   if(contactMotherTongue=="" || contactMotherTongue==null)
   {
      alert("please select MOther Tongue");
      return false;
   }
   if(contactReligion=="" || contactReligion==null)
   {
      alert("please select Religion");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('check_sup_cus',check_sup_cus);
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
         if(check_sup_cus=='customer')
         {
            view_customer(contactCustomer);
         }
         else
         {
            view_Supplier(contactCustomer)
         }
         
         $("#createcontactModal").modal("hide");
      }
   })
})
// end store contact ===================================================

// //start edit contact ===============================================
$("body").on('click','.edit_customer_contact',function(){
   $("#update_contactSalute").html("");
    $("#update_contactPOC").html("");
    $("#update_contactSection").html("");
    $("#update_contactNationality").html("");
    $("#update_contactMotherTongue").html("");
    $("#update_contactReligion").html("");
    $("#update_contactCustomer").html("");
    $.ajax({
        type:'get',
        url:base_path+"/contact-create",
        success:function(res){
            $("#update_contactSalute").append(res.saluteOp);
            $("#update_contactPOC").append(res.pocOp);
            $("#update_contactStatus").append(res.statusOp);
            $("#update_contactSection").append(res.sectionOp);
            $("#update_contactNationality").append(res.countryOp);
            $("#update_contactMotherTongue").append(res.languageOp);
            $("#update_contactReligion").append(res.religionOp);
            $("#update_contactCustomer").append(res.customeOp);
        }
    });
   var id=$(this).attr('data-value');
   var customerId=$(this).attr('data-customer');
    $.ajax({
        type:'get',
        data:{'id':id,'customerId':customerId},
        url:base_path+"/contact-edit",
        success:function(res){
            $("#update_contactCustomer").val(customerId); 
            $("#contact_idUpdate").val(res.id);  
            $("#update_contactSalute").val(res.salute_id);  
            $("#update_contactFirstName").val(res.first_name);  
            $("#update_contactMinddleName").val(res.middle_name);  
            $("#update_contactLastName").val(res.last_name);  
            $("#update_contactPOC").val(res.poc_id);  
            $("#update_contactStatus").val(res.status_id);  
            $("#update_contactSection").val(res.section_id);  
            $("#update_contactDesignation").val(res.designation);  
            $("#update_contactSittingOffice").val(res.sitting_office);  
            $("#update_contactKickback").val(res.Kickback);  
            $("#update_contactOfficialBg").val(res.official_bg);  
            $("#update_contactMobilePhone").val(res.mobile_no);  
            $("#update_contactLandlineOffice").val(res.landline_office);  
            $("#update_contactEmail1").val(res.contact_email);  
            $("#update_contactEmail2").val(res.contact_email2);  
            $("#update_contactPersonalEmail").val(res.presonal_email);  
            $("#update_contactSkypeOthers").val(res.skype_other);  
            $("#update_contactDOB").val(res.dob);  
            $("#update_contactAge").val(res.age_years);  
            $("#update_contactNationality").val(res.nationality);  
            $("#update_contactMotherTongue").val(res.m_tongue);  
            $("#update_contactReligion").val(res.religion);  
            $("#update_contactGender").val(res.gender);  
            $("#update_contactLivingin").val(res.linving_in);  
            $("#update_contactCharacterPecularities").val(res.character_pecularitie);  
            $("#update_contactPersonalBg").val(res.personal_bg);  
            $("#update_contactPassportDetails").val(res.passport_details);  
            $("#update_contactPassportNumber").val(res.passport_number);  
            $("#update_contactPassportIssuedAt").val(res.passport_issued_at);  
            $("#update_contactPassportIssuedDate").val(res.passport_issued_date);  
            $("#update_contactPassportExpiryDate").val(res.passport_expired_date);  
            $("#update_contactVisaDetails").val(res.visa_detail);  
            $("#update_contactDateJoined").val(res.date_joined);  
            $("#update_contactDateLeft").val(res.date_left);  
        }
   });
   $("#updatecontactModal").modal("show");
});
$('#updatecontactModal').on('hidden.bs.modal', function () {
   $(this).find('form').trigger('reset');
});
$(".close_open_update_contactModal").click(function(){
   $("#updatecontactModal").modal("hide");
});
$("#updatcontact").click(function(){
   var _token=$("#token").val();
   var check_sup_cus= $("#check_suppliyer_customer").val();
   var id=$("#contact_idUpdate").val();
   var contactSalute=$("#update_contactSalute").val();
   var contactFirstName=$("#update_contactFirstName").val();
   var contactMinddleName=$("#update_contactMinddleName").val();
   var contactLastName=$("#update_contactLastName").val();
   var contactPOC=$("#update_contactPOC").val();
   var contactStatus=$("#update_contactStatus").val();
   var contactSection=$("#update_contactSection").val();
   var contactDesignation=$("#update_contactDesignation").val();
   var contactSittingOffice=$("#update_contactSittingOffice").val();
   var contactKickback=$("#update_contactKickback").val();
   var contactOfficialBg=$("#update_contactOfficialBg").val();
   var contactMobilePhone=$("#update_contactMobilePhone").val();
   var contactLandlineOffice=$("#update_contactLandlineOffice").val();
   var contactEmail1=$("#update_contactEmail1").val();
   var contactEmail2=$("#update_contactEmail2").val();
   var contactPersonalEmail=$("#update_contactPersonalEmail").val();
   var contactSkypeOthers=$("#update_contactSkypeOthers").val();
   var contactDOB=$("#update_contactDOB").val();
   var contactAge=$("#update_contactAge").val();
   var contactNationality=$("#update_contactNationality").val();
   var contactMotherTongue=$("#update_contactMotherTongue").val();
   var contactReligion=$("#update_contactReligion").val();
   var contactGender=$("#update_contactGender").val();
   var contactLivingin=$("#update_contactLivingin").val();
   var contactCharacterPecularities=$("#update_contactCharacterPecularities").val();
   var contactPersonalBg=$("#update_contactPersonalBg").val();
   var contactPassportDetails=$("#update_contactPassportDetails").val();
   var contactPassportNumber=$("#update_contactPassportNumber").val();
   var contactPassportIssuedAt=$("#update_contactPassportIssuedAt").val();
   var contactPassportIssuedDate=$("#update_contactPassportIssuedDate").val();
   var contactPassportExpiryDate=$("#update_contactPassportExpiryDate").val();
   var contactVisaDetails=$("#update_contactVisaDetails").val();
   var contactDateJoined=$("#update_contactDateJoined").val();
   var contactDateLeft=$("#update_contactDateLeft").val();
   var contactCustomer=$("#update_contactCustomer").val();
   if(contactSalute=="" || contactSalute==null)
   {
      alert("please select Salute");
      return false;
   }
   if(contactFirstName=="" || contactFirstName==null)
   {
      alert("please Fill first name");
      return false;
   }
   if(contactLastName=="" || contactLastName==null)
   {
      alert("please fill last name");
      return false;
   }
   if(contactPOC=="" || contactPOC==null)
   {
      alert("please select POC");
      return false;
   }
   if(contactStatus=="" || contactStatus==null)
   {
      alert("please select Status");
      return false;
   }
   if(contactSection=="" || contactSection==null)
   {
      alert("please select Section");
      return false;
   }
   if(contactNationality=="" || contactNationality==null)
   {
      alert("please select Nationality");
      return false;
   }
   if(contactMotherTongue=="" || contactMotherTongue==null)
   {
      alert("please select MOther Tongue");
      return false;
   }
   if(contactReligion=="" || contactReligion==null)
   {
      alert("please select Religion");
      return false;
   }
   var formData=new FormData();
   formData.append('_token',_token);
   formData.append('check_sup_cus',check_sup_cus);
   formData.append('contactFirstName',contactFirstName);
   formData.append('id',id);
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
      url:base_path+"/contact-update",
      success:function(){
         alert("success data updated !");
         if(check_sup_cus=='customer')
         {
            view_customer(contactCustomer);
         }
        else
        {
         view_Supplier(contactCustomer);
        }
         $("#updatecontactModal").modal("hide");
      }
   });
});
// end edit contact ================================================

// start delete contact ===============================================
$("body").on('click','.delete_customer_contact',function(){
   var id=$(this).attr('data-value');
   var cu_id=$(this).attr('data-customer');
   var check_sup_cus= $("#check_suppliyer_customer").val();
   if (confirm('Are you sure you want to delete this?')) 
   {
      $.ajax({
         type:'get',
         data:{'id':id},
         url:base_path+"/contact-delete",
         success:function(){
            alert("success data deleted !");
            if(check_sup_cus=='customer')
            {
               view_customer(cu_id);
            }
            else
            {
               view_Supplier(cu_id);
            }
           
         }
      });
   }
});
// end delete contact ===================================================