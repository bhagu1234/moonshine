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
        $data=Customer::all();
        // dd($data);
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            $tr.="<tr>
                <td>".$no++."</td>
                <td>".$row->customer_id."</td>
                <td>".$row->user_id."</td>
                <td>".$row->company_detail_id."</td>
                <td>".$row->bank_id."</td>
                <td>".$row->group_cos."</td>
                <td>".$row->address1."</td>
                <td>".$row->address2."</td>
                <td>".$row->area."</td>
                <td>".$row->landmark."</td>
                <td>".$row->country."</td>
                <td>".$row->state."</td>
                <td>".$row->city."</td>
                <td>".$row->address_type."</td>
                <td>".$row->phone_no."</td>
                <td>".$row->fax."</td>
                <td>".$row->location_email."</td>
                <td>".$row->customer_name."</td>
                <td>".$row->customer_email."</td>
                <td><a href='#'>edit</a><a href='delete'>delete</a></td>
            </tr>";

        }
        echo $tr;
        // return json_encode($data);
    }
    public function getDetails(Request $request)
    {
        $country=Country::all();
        $AddressType=AddressType::all();
        $Region=Region::all();
        $id=$request->id;
        $option="<option selected disabled value>...</option>";
        $countryOPtion=$option;
        $addresTypeOption=$option;
        $regionOption=$option;
        foreach($country as $r)
        {
            $countryOPtion.="<option value=".$r->id.">".$r->name."</option>";
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
            $state=District::where('state_id',$id)->get();
            $sta_option=$option;
            foreach($state as $r)
            {
                $sta_option.="<option value=".$r->district_id.">".$r->district_name."</option>";
            }
            return $sta_option;
        }
        elseif($request->from=="district")
        {
            $state=City::where('district_id',$id)->get();
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
        dd($request);
        $Customer=new Customer();
        $Customer->user_id=$request->user_id;
        $Customer->company_detail_id=$request->company_detail_id;
        $Customer->bank_id=$request->bank_id;
        $Customer->group_cos=$request->group_cos;
        $Customer->address1=$request->address1;
        $Customer->address2=$request->address2;
        $Customer->area=$request->area;
        $Customer->landmark=$request->landmark;
        $Customer->country=$request->country;
        $Customer->state=$request->state;
        $Customer->city=$request->city;
        $Customer->address_type=$request->address_type;
        $Customer->phone_no=$request->phone_no;
        $Customer->location_email=$request->location_email;
        $Customer->fax=$request->fax;
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
        return json_encode($customerdata);

    }
    public function update(Request $request)
    {
        
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $customerdata=Customer::where('customer_id',$id)->delete();
        $response = array('status' => 'success', 'message' => 'customer Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
}
