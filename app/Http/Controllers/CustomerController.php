<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\AddressType;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $data=Customer::orderBY('id','DESC')
        ->leftJoin('countries','countries.id','customers.country')
        ->leftJoin('cities','cities.city_id','customers.city')
        ->leftJoin('states','states.state_id','customers.state')
        ->leftJoin('address_types','address_types.address_id','customers.address_type')
        ->leftJoin('users','users.id','customers.user_id')
        ->select('customers.*','cities.city_name','states.name as state_name','countries.country_name as countryname','address_types.address_name','users.first_name','users.last_name')
        ->get();
        // dd($data);
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            if($row->delete_status==1)
            {
                $tr.="<tr>
                    <td class='view_customer' data-value=".$row->id.">".$no++."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->customer_name."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->first_name. " ".$row->last_name."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->bank_id."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->group_cos."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->address1."</td>
                    <td>".$row->address2."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->area."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->landmark."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->countryname."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->state_name."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->city_name."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->address_name."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->phone_no."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->fax."</td>
                    <td class='view_customer' data-value=".$row->id.">".$row->location_email."</td>
                    <td>
                        <a href='#' id='edit_customer' data-value=".$row->id.">edit</a>
                        <a href='#' onclick='view_customer(".$row->id.")' data-value=".$row->id.">view</a>
                        <a href='#' id='delete_customer' data-value=".$row->id.">delete</a>
                    </td>
                </tr>";
            }
           

        }
        return $tr;
        // return json_encode($data);
    }
    public function getDetails(Request $request)
    {
        $country=Country::where('status','1')->get();
        $AddressType=AddressType::where('status','1')->get();
        $Region=Region::where('status','1')->get();
        $id=$request->id;
        $option="<option selected disabled value>...</option>";
        $countryOPtion=$option;
        $addresTypeOption=$option;
        $regionOption=$option;
        foreach($country as $r)
        {
            $countryOPtion.="<option value=".$r->id.">".$r->country_name."</option>";
        }
        foreach($AddressType as $r)
        {
            $addresTypeOption.="<option value=".$r->address_id.">".$r->address_name."</option>";
        }
        foreach($Region as $r)
        {
            $regionOption.="<option value=".$r->region_id.">".$r->name."</option>";
        }
        if($request->from=="country")
        {
            $state=State::where('country_id',$id)->get();
            $sta_option=$option;
            foreach($state as $r)
            {
                $sta_option.="<option value=".$r->state_id.">".$r->name."</option>";
            }
            return $sta_option;
        }
        elseif($request->from=="state")
        {
            $state=District::where('state_id',$id)->where('status','1')->get()->get();
            $sta_option=$option;
            foreach($state as $r)
            {
                $sta_option.="<option value=".$r->district_id.">".$r->district_name."</option>";
            }
            return $sta_option;
        }
        elseif($request->from=="district")
        {
            $state=City::where('district_id',$id)->where('status','1')->get()->get();
            $sta_option=$option;
            foreach($state as $r)
            {
                $sta_option.="<option value=".$r->city_id.">".$r->city_name."</option>";
            }
            return $sta_option;
        }
        if($request->from=="open_form")
        {
            $response=array('country'=>$countryOPtion,'addressType'=>$addresTypeOption,'region'=>$regionOption);
            return $response;
        }
    }
    public function store(Request $request)
    {
        if($request->customer_country=="null")
        {
            $request->customer_country=null;
        }
        if($request->CustomerState=="null")
        {
            $request->CustomerState=null;
        }
        if($request->CustomerDistrict=="null")
        {
            $request->CustomerDistrict=null;
        }
        if($request->CustomerCity=="null")
        {
            $request->CustomerCity=null;
        }
        if($request->CustomerRegion=="null")
        {
            $request->CustomerRegion=null;
        }
        if($request->CustomerType=="null")
        {
            $request->CustomerType=null;
        }
        $Customer=new Customer();
        $Customer->user_id=1;
        $Customer->company_detail_id=$request->company_detail_id;
        $Customer->bank_id=$request->bank_id;
        $Customer->group_cos=$request->customer_groupCos;
        $Customer->address1=$request->customer_address1;
        $Customer->address2=$request->customer_address2;
        $Customer->area=$request->CustomerArea;
        $Customer->landmark=$request->customerLandMark;
        $Customer->country=$request->customer_country;
        $Customer->state=$request->CustomerState;
        $Customer->district=$request->CustomerDistrict;
        $Customer->city=$request->CustomerCity;
        $Customer->region=$request->CustomerRegion;
        $Customer->address_type=$request->CustomerType;
        $Customer->phone_no=$request->customerPhoneNo;
        $Customer->location_email=$request->customerLocationEmail;
        $Customer->fax=$request->customerFax;
        $Customer->website=$request->customerWebsite;
        $Customer->refere_by=$request->customerReferencedBy;
        $Customer->trade_activity=$request->CustomerTradeActivity;
        $Customer->facility_location=$request->CustomerFacilityAndLocation;
        // $Customer->customer_contact=$request->customerContact;
        // $Customer->bank_id=$request->customerBank;
        // $Customer->credit_facility=$request->customerCreditFacility;
        // $Customer->visite_rating=$request->customerVisiteRating;
        $Customer->postbox=$request->customerPostBox;
        $Customer->customer_name=$request->customer_name;
        $Customer->customer_email=$request->customer_email;
        $Customer->save();
        $response = array('status' => 'success', 'message' => 'customer Added successfully.','status' => 200); 
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $customerdata=Customer::findOrFail($id);
        $countryId=$customerdata->country;
        $state_id=$customerdata->state;
        $districtId=$customerdata->district;
        $state=State::where('country_id',$countryId)->orderBy('state_id','DESC')->get();
        $district=District::where('state_id',$state_id)->get();
        $city=City::where('district_id',$districtId)->get();
        $response=array('allData'=>$customerdata,'state'=>$state,'district'=>$district,'city'=>$city);
        return $response;

    }
    public function update(Request $request)
    {
        // dd($request);
        $id=$request->id;
        $Customer=Customer::findOrFail($id);
        $Customer->user_id=1;
        $Customer->company_detail_id=$request->company_detail_id;
        $Customer->bank_id=$request->bank_id;
        $Customer->group_cos=$request->customer_groupCos;
        $Customer->address1=$request->customer_address1;
        $Customer->address2=$request->customer_address2;
        $Customer->area=$request->CustomerArea;
        $Customer->landmark=$request->customerLandMark;
        $Customer->country=$request->customer_country;
        $Customer->state=$request->CustomerState;
        $Customer->district=$request->CustomerDistrict;
        $Customer->city=$request->CustomerCity;
        $Customer->region=$request->CustomerRegion;
        $Customer->address_type=$request->CustomerType;
        $Customer->phone_no=$request->customerPhoneNo;
        $Customer->location_email=$request->customerLocationEmail;
        $Customer->fax=$request->customerFax;
        $Customer->website=$request->customerWebsite;
        $Customer->refere_by=$request->customerReferencedBy;
        $Customer->trade_activity=$request->CustomerTradeActivity;
        $Customer->facility_location=$request->CustomerFacilityAndLocation;
        // $Customer->customer_contact=$request->customerContact;
        // $Customer->bank_id=$request->customerBank;
        // $Customer->credit_facility=$request->customerCreditFacility;
        // $Customer->visite_rating=$request->customerVisiteRating;
        $Customer->postbox=$request->customerPostBox;
        $Customer->customer_name=$request->customer_name;
        $Customer->customer_email=$request->customer_email;
        $Customer->save();
        $response = array('status' => 'success', 'message' => 'customer Updated successfully.','status' => 200); 
        return json_encode($response);
    }
    public function view(Request $request)
    {
        $id=$request->id;
        $customerdata=Customer::findOrFail($id);
        $contact_data=Customer::join('contacts','contacts.customer_id','customers.id')
                ->leftJoin('salutes','salutes.id','contacts.salute_id')
                ->leftJoin('pocs','pocs.id','contacts.poc_id')
                ->leftJoin('customer_statuses','customer_statuses.id','contacts.status_id')
                ->leftJoin('sections','sections.id','contacts.section_id')
                ->leftJoin('countries','countries.id','contacts.nationality')
                ->leftJoin('languages','languages.id','contacts.m_tongue')
                ->leftJoin('religions','religions.id','contacts.religion')
                ->where('contacts.status','1')
                ->where('contacts.customer_id',$id)
                ->select('contacts.*','pocs.name as poc_name','customer_statuses.name as status_name','sections.name as section_name','countries.country_name','languages.name as motherTonName','religions.name as religions_name','salutes.name as salutes_name')
                ->get();
        $contact_tr="";
        $no=1;
        // dd($contact_data);
        foreach($contact_data as $row)
        {
           $contact_tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->salutes_name ." " . $row->first_name ." " . $row->middle_name ." " . $row->last_name ."</td>
                    <td>".$row->poc_name."</td>
                    <td>".$row->status_name."</td>
                    <td>".$row->designation."</td>
                    <td>".$row->sitting_office."</td>
                    <td>".$row->Kickback."</td>
                    <td>".$row->official_bg."</td>
                    <td>".$row->mobile_no."</td>
                    <td>".$row->landline_office."</td>
                    <td>".$row->contact_email."</td>
                    <td>".$row->contact_email2."</td>
                    <td>".$row->presonal_email."</td>
                    <td>".$row->skype_other."</td>
                    <td>".$row->date_joined."</td>
                    <td>".$row->date_left."</td>
                    <td>".$row->dob."</td>
                    <td>".$row->age_years."</td>
                    <td>".$row->country_name."</td>
                    <td>".$row->motherTonName."</td>
                    <td>".$row->religions_name."</td>
                    <td>".$row->gender."</td>
                    <td>".$row->linving_in."</td>
                    <td>".$row->personal_bg."</td>
                    <td>".$row->passport_details."</td>
                    <td>".$row->passport_number."</td>
                    <td>".$row->passport_issued_at."</td>
                    <td>".$row->passport_issued_date."</td>
                    <td>".$row->passport_expired_date."</td>
                    <td>".$row->visa_detail."</td>
                    <td>
                        <a  href='#' class='edit_customer_contact' data-value=".$row->id." data-customer=".$row->customer_id.">edit</a>
                        <a href='#' class='delete_customer_contact' data-value=".$row->id." data-customer=".$row->customer_id.">delete</a>
                    </td>
                </tr>" ;
        }
        $bank_data=Customer::join('banks','banks.customer_id','customers.id')
        ->where('banks.status','1')
        ->where('banks.customer_id',$id)
        ->get();
        $bank_tr="";
        foreach($bank_data as $row)
        {
           $bank_tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->bank_name ."</td>
                    <td>".$row->branch_name."</td>
                    <td>".$row->bank_address."</td>
                    <td>".$row->account_number."</td>
                    <td>".$row->iban_account_number."</td>
                    <td>".$row->account_holder_name."</td>
                    <td>".$row->pr_officer."</td>
                    <td>".$row->bank_email_id."</td>
                    <td>".$row->IFSC_code."</td>
                    <td>".$row->SWIFT_code."</td>
                    <td>".$row->bank_rating."</td>
                    <td>".$row->direct_fac."</td>
                    <td>".$row->indirect_fac."</td>
                    <td>".$row->bank_reference."</td>
                    <td>".$row->comments."</td>
                    <td>
                        <a  href='#' class='edit_bank_customer' data-value=".$row->id." data-customer=".$row->customer_id.">edit</a>
                        <a href='#' class='delete_bank_customer' data-value=".$row->id." data-customer=".$row->customer_id.">delete</a>
                    </td>
                </tr>" ;
        }
        $response=array('customerdata'=>$customerdata,'contact_tr'=>$contact_tr,'bank_tr'=>$bank_tr);
        return $response;
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $customerdata=Customer::findOrFail($id);
        $customerdata->delete_status='0';
        $customerdata->save();
        $response = array('status' => 'success', 'message' => 'customer Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
}
