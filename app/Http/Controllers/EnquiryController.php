<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Contact;
use App\Models\EnquiryPriority;
use App\Models\Enquiry;
use App\Models\User;
use App\Models\Uom;
use App\Models\Incotrim;

class EnquiryController extends Controller
{
    public function index(Request $request)
    {
        $data=Enquiry::join('customers','customers.id','enquiries.customer_id')
            ->leftJoin('products','products.id','enquiries.product_id')
            ->leftJoin('contacts','contacts.id','enquiries.contact_id')
            ->leftJoin('uoms','uoms.id','enquiries.uom_id')
            ->leftJoin('enquiry_priorities','enquiry_priorities.id','enquiries.enquiry_priority_id')
            ->leftJoin('users','users.id','enquiries.enquiry_focal_points_id')
            ->leftJoin('incotrims','incotrims.id','enquiries.inco_term_id')
            ->leftJoin('categories','categories.id','products.category_id')
            ->leftJoin('base_products','base_products.id','products.base_product_id')
            ->leftJoin('sub_products','sub_products.id','products.sub_product_id')
            ->leftJoin('cities','cities.city_id','customers.city')
            ->leftJoin('states','states.state_id','customers.state')
            ->where('enquiries.status','1')
            ->get();
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            $tr.="<tr>
                    <td>".$no++." </td>
                    <td>".$row->name."</td>
            </tr>";
        }
    }
    public function create(Request $request)
    {
        $id=$request->id;
        $Customer=Customer::where('delete_status','1')->get();
        $option="<option selected disabled value>...</option>";
        $customer_option=$option;
        $contact_option=$option;
        $product_option=$option;
        $enquiryPr_option=$option;
        $focalPoint_option=$option;
        $incoterm_option=$option;
        $uom_option=$option;
        if($request->data=='get_contact')
        {
            $Contact=Contact::where('status','1')->where('customer_id',$id)->get();
            foreach($Contact as $row)
            {
                $contact_option.="<option value=".$row->id.">".$row->first_name."</option>";               
            }
            return $contact_option;
        }
        $product=Product::where('delete_status','1')->get();
        $EnquiryPriority=EnquiryPriority::where('status','1')->get();
        $enquiry_focal_point=User::where('delete_status','1')->get();
        $Incoterm=Incotrim::where('status','1')->get();
        $uom=Uom::where('status','1')->get();
        foreach($Customer as $row)
        {
            $customer_option.="<option value=".$row->id.">".$row->customer_name."</option>";
        }
        foreach($product as $row)
        {
            $product_option.="<option value=".$row->id.">".$row->product_full_name."</option>";
        }
        foreach($EnquiryPriority as $row)
        {
            $enquiryPr_option.="<option value=".$row->id.">".$row->name."</option>";
        }
        foreach($enquiry_focal_point as $row)
        {
            $focalPoint_option.="<option value=".$row->id.">".$row->first_name." " .$row->last_name."</option>";
        }
        foreach($Incoterm as $row)
        {
            $incoterm_option.="<option value=".$row->id.">".$row->name."</option>";
        }
        foreach($uom as $row)
        {
            $uom_option.="<option value=".$row->id.">".$row->name."</option>";
        }
        $response=array('customer_option'=>$customer_option,'product_option'=>$product_option,'enquiryPr_option'=>$enquiryPr_option,'focalPoint_option'=>$focalPoint_option,'incoterm_option'=>$incoterm_option,'uom_option'=>$uom_option);
       if($request->data=='open_form')
       {
            return $response;
       }
    }
    public function store(Request $request)
    {	
        // dd($request); 	 	
        $Enquiry=new Enquiry();
        $Enquiry->customer_id=$request->create_enquiryCustomer;
        $Enquiry->contact_id=$request->create_enquirycontact;
        $Enquiry->product_id=$request->create_enquiryProduct;
        $Enquiry->uom_id=$request->create_enquiryUom;
        $Enquiry->total_qty=$request->create_enquiryTotalQty;
        $Enquiry->enquiry_value_aed=$request->create_enquiryEnquiryValueAED;
        $Enquiry->margin_set=$request->create_enquiryMarginSet;
        $Enquiry->enquiry_date=$request->create_enquiryenquiryDate;
        $Enquiry->enquiry_priority_id=$request->create_enquiryEnquiryPrioprity;
        $Enquiry->enquiry_focal_points_id=$request->create_enquiryEnquiryfocalPoint;
        $Enquiry->enquiry_mode=$request->create_enquiryEnquiryMode;
        $Enquiry->enquired_item=$request->create_enquiryItems;
        $Enquiry->supply_term=$request->create_enquirySupplyTerm;
        $Enquiry->enquiry_reference=$request->create_EnquiryReference;
        $Enquiry->enquiry_abstract=$request->create_EnquiryAbstract;
        $Enquiry->kb_commitment=$request->create_enquiryKbCommitment;
        $Enquiry->enquiry_period=$request->create_enquiryPeriod;
        $Enquiry->inco_term_id=$request->create_enquiryEnquiryInfoTerms;
        $Enquiry->delivery_place=$request->create_enquiryDeliveryPlace;
        $Enquiry->enquiry_conditions=$request->create_EnquiryConditions;
        $Enquiry->save();
        $response=array("status"=>200,'response'=>'data stored successfully');
        return $response;
    }
    public function edit(Request $request)
    {

    }
    public function update(Request $request)
    {

    }
    public function view(Request $request)
    {

    }
    public function delete(Request $request)
    {

    }
}