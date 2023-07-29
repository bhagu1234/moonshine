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
                    <td><a href='#' onclick='view_Supplier(".$row->id.")' data-value=".$row->id."><i class='bx bxs-show'></i></a></td>
                    <td>".$row->supplier_name."</td>
                    <td>".$row->first_name. " ".$row->last_name."</td>
                    <td>".$row->bank_id."</td>
                    <td>".$row->group_cos."</td>
                    <td>".$row->address1."</td>
                    <td>".$row->address2."</td>
                    <td>".$row->area."</td>
                    <td>".$row->landmark."</td>
                    <td>".$row->countryname."</td>
                    <td>".$row->state_name."</td>
                    <td>".$row->city_name."</td>
                    <td>".$row->address_name."</td>
                    <td>".$row->phone_no."</td>
                    <td>".$row->fax."</td>
                    <td>".$row->location_email."</td>
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
        // $supplier->supplier_contact=$request->supplierContact;
        // $supplier->bank_id=$request->supplierBank;
        // $supplier->credit_facility=$request->supplierCreditFacility;
        // $supplier->visite_rating=$request->supplierVisiteRating;
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
        // $supplier->supplier_contact=$request->supplierContact;
        // $supplier->bank_id=$request->supplierBank;
        // $supplier->credit_facility=$request->supplierCreditFacility;
        // $supplier->visite_rating=$request->supplierVisiteRating;
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
        $contact_data=Supplier::join('contacts','contacts.supplier_id','suppliers.id')
            ->leftJoin('salutes','salutes.id','contacts.salute_id')
            ->leftJoin('pocs','pocs.id','contacts.poc_id')
            ->leftJoin('customer_statuses','customer_statuses.id','contacts.status_id')
            ->leftJoin('sections','sections.id','contacts.section_id')
            ->leftJoin('countries','countries.id','contacts.nationality')
            ->leftJoin('languages','languages.id','contacts.m_tongue')
            ->leftJoin('religions','religions.id','contacts.religion')
            ->where('contacts.status','1')
            ->where('contacts.supplier_id',$id)
            ->select('contacts.*','pocs.name as poc_name','customer_statuses.name as status_name','sections.name as section_name','countries.country_name','languages.name as motherTonName','religions.name as religions_name','salutes.name as salutes_name')
            ->get();
            $contact_tr="";
            $no=1;
        foreach($contact_data as $row)
        {
            $contact_tr.="<tr>
                <td>".$no++."</td>
                <td>".$row->salutes_name ." " .$row->first_name ." " . $row->middle_name ." " . $row->last_name ."</td>
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
                    <a  href='#' class='edit_customer_contact' data-value=".$row->id." data-customer=".$row->supplier_id.">edit</a>
                    <a href='#' class='delete_customer_contact' data-value=".$row->id." data-customer=".$row->supplier_id.">delete</a>
                </td>
            </tr>" ;
        }
        $bank_data=Supplier::join('banks','banks.supplier_id','suppliers.id')
            ->where('banks.status','1')
            ->where('banks.supplier_id',$id)
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
                    <a  href='#' class='edit_bank_customer' data-value=".$row->id." data-customer=".$row->supplier_id.">edit</a>
                    <a href='#' class='delete_bank_customer' data-value=".$row->id." data-customer=".$row->supplier_id.">delete</a>
                </td>
            </tr>" ;
        }
        $response=array('supplierdata'=>$supplierdata,'contact_tr'=>$contact_tr,'bank_tr'=>$bank_tr);
        return $response;
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
