<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Incotrim;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data=Order::where('orders.status','1')
                ->join('enquiries','enquiries.id','orders.enquiry_id')
                ->leftJoin('customers','customers.id','enquiries.customer_id')
                ->leftJoin('products','products.id','enquiries.product_id')
                ->select('orders.*','customers.customer_name','products.product_full_name','customers.phone_no')
                ->where("orders.status",'1')
                ->get();
        return view('order.index',compact('data'));
    }
    public function create(Request $request)
    {
        $enquiry=Enquiry::where('status','1')->where('enq_status','!=','5')->get();
        $Incotrim=Incotrim::where('status','1')->get();
        $option="<option selected disabled>select one</option>";
        $enqOpt=$option;
        $incoTrOp=$option;
        foreach($enquiry as $row)
        {
            $enqOpt.="<option value=".$row->id.">EQ".str_pad($row->id, 6, '0', STR_PAD_LEFT)."</option>";
        }
        foreach($Incotrim as $row)
        {
            $incoTrOp.="<option value=".$row->id.">".$row->name."</option>";
        }
        $response=array('enqOpt'=>$enqOpt,'incoTrOp'=>$incoTrOp);
        return $response;
    }
    public function store(Request $request)
    { 	 
        $data= new Order();
        $data->enquiry_id=$request->create_OrderEnquiry;
        // $data->msbmt_sc_ref=$request->create_OrderMSBMTSCRef;
        $data->producer=$request->create_OrderProducer;
        $data->order_qty_mt=$request->create_OrderQtyMTe;
        $data->order_value_us=$request->create_OrderValueUS;
        $data->order_conf_ref=$request->create_OrderConfRef;
        $data->shipment_days=$request->create_OrderShipmentDays;
        $data->ship_mode=$request->create_OrderShipMode;
        $data->ship_from=$request->create_OrderShipFrom;
        $data->ship_to=$request->create_OrderShipTo;
        $data->partial_ship=$request->create_OrderPartialShip;
        $data->Trans_shipment=$request->create_OrderTransshipment;
        $data->delivery_days=$request->create_OrderDeliverydays;
        $data->inco_term_id=$request->create_OrderIncoTerm;
        $data->destination=$request->create_OrderDestination;
        $data->comment=$request->create_OrderComments;
        $data->buyer_order_ref=$request->create_OrderBuyerOrderRef;
        $data->buyer_order_date=$request->create_OrderBuyerOrderDate;
        $data->mill_p_inv_sc_ref=$request->create_OrderMillSCRef;
        $data->mill_p_inv_sc_date=$request->create_OrderMillSCDate;
        $data->month_booked=$request->create_OrderMonthBooked;
        $data->msbmt_sc_date=$request->create_OrderMSBMTSCDate;
        $data->order_reference_comment=$request->create_OrderRefComments;
        $data->save();
        $today=date("Y-m-d");
        if($data==true)
        {
            $enqData=Enquiry::findOrFail($request->create_OrderEnquiry);
            $enqData->confirmed_date=$today;
            $enqData->enq_status='5';
            $enqData->save();
        }
        $response=array("status"=>'200','message'=>"data stored successfully !!");
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
        
    }
    public function view(Request $request)
    {
        $data=Order::where('orders.status','1')
            ->join('enquiries','enquiries.id','orders.enquiry_id')
            ->leftJoin('customers','customers.id','enquiries.customer_id')
            ->leftJoin('products','products.id','enquiries.product_id')
            ->leftJoin('categories','categories.id','products.category_id')
            ->leftJoin('incotrims','incotrims.id','enquiries.inco_term_id')
            ->select('orders.*','customers.customer_name','products.product_full_name','customers.phone_no','categories.category_name','incotrims.name as incoTrname')
            ->where('orders.id',$request->id)
            ->where("orders.status",'1')
            ->first();
            $response=array("order_details"=>$data);
        return $response;
    }
}
