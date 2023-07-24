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
        $Customer->customer_contact=$request->customerContact;
        $Customer->bank_id=$request->customerBank;
        $Customer->credit_facility=$request->customerCreditFacility;
        $Customer->visite_rating=$request->customerVisiteRating;
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
        $Customer->customer_contact=$request->customerContact;
        $Customer->bank_id=$request->customerBank;
        $Customer->credit_facility=$request->customerCreditFacility;
        $Customer->visite_rating=$request->customerVisiteRating;
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
        return $customerdata;
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
