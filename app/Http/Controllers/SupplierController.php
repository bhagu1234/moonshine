<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\AddressType;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        $data=Supplier::orderBY('id','DESC')
        ->leftJoin('countries','countries.id','suppliers.country')
        ->leftJoin('cities','cities.city_id','suppliers.city')
        ->leftJoin('states','states.state_id','suppliers.state')
        ->leftJoin('address_types','address_types.address_id','suppliers.address_type')
        ->leftJoin('users','users.id','suppliers.user_id')
        ->select('suppliers.*','cities.city_name','states.name as state_name','countries.country_name as countryname','address_types.address_name','users.first_name','users.last_name')
        ->get();
        // dd($data);
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            if($row->delete_status==1)
            {
                $tr.="<tr>
                    <td class='view_supplier' data-value=".$row->id.">".$no++."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->supplier_name."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->first_name. " ".$row->last_name."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->bank_id."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->group_cos."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->address1."</td>
                    <td>".$row->address2."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->area."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->landmark."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->countryname."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->state_name."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->city_name."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->address_name."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->phone_no."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->fax."</td>
                    <td class='view_supplier' data-value=".$row->id.">".$row->location_email."</td>
                    <td>
                        <a href='#' id='edit_supplier' data-value=".$row->id.">edit</a>
                        <a href='#' id='delete_supplier' data-value=".$row->id.">delete</a>
                    </td>
                </tr>";
            }
           

        }
        return $tr;
        // return json_encode($data);
    }
    public function store(Request $request)
    {
        if($request->supplier_country=="null")
        {
            $request->supplier_country=null;
        }
        if($request->supplierState=="null")
        {
            $request->supplierState=null;
        }
        if($request->supplierDistrict=="null")
        {
            $request->supplierDistrict=null;
        }
        if($request->supplierCity=="null")
        {
            $request->supplierCity=null;
        }
        if($request->supplierRegion=="null")
        {
            $request->supplierRegion=null;
        }
        if($request->supplierType=="null")
        {
            $request->supplierType=null;
        }
        $supplier=new Supplier();
        $supplier->user_id=1;
        $supplier->company_detail_id=$request->company_detail_id;
        $supplier->bank_id=$request->bank_id;
        $supplier->group_cos=$request->supplier_groupCos;
        $supplier->address1=$request->supplier_address1;
        $supplier->address2=$request->supplier_address2;
        $supplier->area=$request->supplierArea;
        $supplier->landmark=$request->supplierLandMark;
        $supplier->country=$request->supplier_country;
        $supplier->state=$request->supplierState;
        $supplier->district=$request->supplierDistrict;
        $supplier->city=$request->supplierCity;
        $supplier->region=$request->supplierRegion;
        $supplier->address_type=$request->supplierType;
        $supplier->phone_no=$request->supplierPhoneNo;
        $supplier->location_email=$request->supplierLocationEmail;
        $supplier->fax=$request->supplierFax;
        $supplier->website=$request->supplierWebsite;
        $supplier->refere_by=$request->supplierReferencedBy;
        $supplier->trade_activity=$request->supplierTradeActivity;
        $supplier->facility_location=$request->supplierFacilityAndLocation;
        $supplier->supplier_contact=$request->supplierContact;
        $supplier->bank_id=$request->supplierBank;
        $supplier->credit_facility=$request->supplierCreditFacility;
        $supplier->visite_rating=$request->supplierVisiteRating;
        $supplier->postbox=$request->supplierPostBox;
        $supplier->supplier_name=$request->supplier_name;
        $supplier->supplier_email=$request->supplier_email;
        $supplier->save();
        $response = array('status' => 'success', 'message' => 'supplier Added successfully.','status' => 200); 
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $supplierdata=Supplier::findOrFail($id);
        $countryId=$supplierdata->country;
        $state_id=$supplierdata->state;
        $districtId=$supplierdata->district;
        $country=Country::all();
        $state=State::where('country_id',$countryId)->orderBy('state_id','DESC')->get();
        $district=District::where('state_id',$state_id)->get();
        $city=City::where('district_id',$districtId)->get();
        $response=array('allData'=>$supplierdata,'state'=>$state,'district'=>$district,'city'=>$city,'country'=>$country);
        return $response;

    }
    public function update(Request $request)
    {
        // dd($request);
        $id=$request->id;
        $supplier=Supplier::findOrFail($id);
        $supplier->user_id=1;
        $supplier->company_detail_id=$request->company_detail_id;
        $supplier->bank_id=$request->bank_id;
        $supplier->group_cos=$request->supplier_groupCos;
        $supplier->address1=$request->supplier_address1;
        $supplier->address2=$request->supplier_address2;
        $supplier->area=$request->supplierArea;
        $supplier->landmark=$request->supplierLandMark;
        $supplier->country=$request->supplier_country;
        $supplier->state=$request->supplierState;
        $supplier->district=$request->supplierDistrict;
        $supplier->city=$request->supplierCity;
        $supplier->region=$request->supplierRegion;
        $supplier->address_type=$request->supplierType;
        $supplier->phone_no=$request->supplierPhoneNo;
        $supplier->location_email=$request->supplierLocationEmail;
        $supplier->fax=$request->supplierFax;
        $supplier->website=$request->supplierWebsite;
        $supplier->refere_by=$request->supplierReferencedBy;
        $supplier->trade_activity=$request->supplierTradeActivity;
        $supplier->facility_location=$request->supplierFacilityAndLocation;
        $supplier->supplier_contact=$request->supplierContact;
        $supplier->bank_id=$request->supplierBank;
        $supplier->credit_facility=$request->supplierCreditFacility;
        $supplier->visite_rating=$request->supplierVisiteRating;
        $supplier->postbox=$request->supplierPostBox;
        $supplier->supplier_name=$request->supplier_name;
        $supplier->supplier_email=$request->supplier_email;
        $supplier->save();
        $response = array('status' => 'success', 'message' => 'supplier Updated successfully.','status' => 200); 
        return json_encode($response);
    }
    public function view(Request $request)
    {
        $id=$request->id;
        $supplierdata=Supplier::findOrFail($id);
        return $supplierdata;
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $supplierdata=Supplier::findOrFail($id);
        $supplierdata->delete_status='0';
        $supplierdata->save();
        $response = array('status' => 'success', 'message' => 'supplier Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
}
