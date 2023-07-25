<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Language;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use App\Models\Contact;
use App\Models\CustomerStatus;
use App\Models\Poc;
use App\Models\Religion;
use App\Models\Salute;
use App\Models\Section;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        
    }
    public function create(Request $request)
    {
        $salute=Salute::where('status','1')->get();
        $poc=Poc::where('status','1')->get();
        $status=CustomerStatus::where('status','1')->get();
        $section=Section::where('status','1')->get();
        $country=Country::where('status','1')->get();
        $language=Language::where('status','1')->get();
        $religion=Religion::where('status','1')->get();
        $customer=Customer::where('delete_status','1')->get();
        $optio="<option selected disabled value>...</option>";
        $saluteOp=$optio;
        $pocOp=$optio;
        $statusOp=$optio;
        $sectionOp=$optio;
        $countryOp=$optio;
        $languageOp=$optio;
        $religionOp=$optio;
        $customeOp=$optio;
        foreach ($salute as $key => $row) 
        {
          $saluteOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($poc as $key => $row) 
        {
          $pocOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($status as $key => $row) 
        {
          $statusOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($section as $key => $row) 
        {
          $sectionOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($country as $key => $row) 
        {
          $countryOp.="<option value=".$row->id.">".$row->country_name."</option>";  
        }
        foreach ($language as $key => $row) 
        {
          $languageOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($religion as $key => $row) 
        {
          $religionOp.="<option value=".$row->id.">".$row->name."</option>";  
        }
        foreach ($customer as $key => $row) 
        {
          $customeOp.="<option value=".$row->id.">".$row->customer_name."</option>";  
        }
        $response=array('saluteOp'=>$saluteOp,'pocOp'=>$pocOp,'statusOp'=>$statusOp,'sectionOp'=>$sectionOp,'countryOp'=>$countryOp,'languageOp'=>$languageOp,'religionOp'=>$religionOp,'customeOp'=>$customeOp);
        return $response;
    }
    public function store(Request $request)
    {	 	 
        // dd($request);	 	 	 	 	
        $contactData=new Contact();
        $contactData->customer_id=$request->contactCustomer;
        $contactData->salute_id=$request->contactSalute;
        $contactData->first_name=$request->contactFirstName;
        $contactData->middle_name=$request->contactMinddleName;
        $contactData->last_name=$request->contactLastName;
        $contactData->poc_id=$request->contactPOC;
        $contactData->status_id=$request->contactStatus;
        $contactData->section_id=$request->contactSection;
        $contactData->designation=$request->contactDesignation;
        $contactData->sitting_office=$request->contactSittingOffice;
        $contactData->Kickback=$request->contactKickback;
        $contactData->official_bg=$request->contactOfficialBg;
        $contactData->landline_office=$request->contactLandlineOffice;
        $contactData->presonal_email=$request->contactPersonalEmail;
        $contactData->skype_other=$request->contactSkypeOthers;
        $contactData->gender=$request->contactGender;
        $contactData->linving_in=$request->contactLivingin;
        // $contactData->contact_type=$request->contact_name;
        $contactData->contact_email=$request->contactEmail1;
        $contactData->contact_email2=$request->contactEmail2;
        $contactData->mobile_no=$request->contactMobilePhone;
        $contactData->dob=$request->contactDOB;
        $contactData->age_years=$request->contactAge;
        $contactData->m_tongue=$request->contactMotherTongue;
        $contactData->nationality=$request->contactNationality;
        $contactData->religion=$request->contactReligion;
        $contactData->character_pecularitie=$request->contactCharacterPecularities;
        $contactData->personal_bg=$request->contactPersonalBg;
        $contactData->visa_detail=$request->contactVisaDetails;
        $contactData->passport_issued_at=$request->contactPassportIssuedAt;
        $contactData->passport_issued_date=$request->contactPassportIssuedDate;
        $contactData->passport_expired_date=$request->contactPassportExpiryDate;
        $contactData->date_joined=$request->contactDateJoined;
        $contactData->date_left=$request->contactDateLeft;
        $contactData->passport_number=$request->contactPassportNumber;
        $contactData->passport_details=$request->contactPassportDetails;
        $contactData->save();
        $response=array('status'=>'200','data'=>'contact created succefully');
        return $response;
    }
    public function edit(Request $request)
    {

    }
    public function update(Request $request)
    {

    }
    public function delete(Request $request)
    {
      $id=$request->id;
      $data=Contact::findOrFail($id);
      $data->status='0';
      $data->save();
      $response=array('status'=>'200','data'=>'contact deleted succefully');
      return $response;
    }
}
