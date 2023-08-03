<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Margin;
use App\Models\Enquiry;
use App\Models\Order;
class MarginController extends Controller
{
    public function store(Request $request)
    {	 	 	 	 	 	 	 	 	
        $data= new Margin();
        $data->order_id=$request->order_id;
        $data->enquiry_id=$request->enquiry_id;
        $data->seller_unit_rate=$request->seller_unit_rate;
        $data->price_unit_rate=$request->price_unit_rate;
        $data->buyer_unit_rate=$request->buyer_unit_rate;
        $data->total_margin=$request->total_margin;
        $data->agreemant_date=$request->agreemant_date;
        $data->kb_agreed=$request->kb_agreed;
        $data->margin_secured=$request->margin_secured;
        $data->commants=$request->commants;
        $data->save();
        $response=array("status"=>200,"message"=>"data stored successfully !!");
        return $response;
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $data=Margin::findOrFail($id);
        return $data;
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $data=Margin::findOrFail($id);
        $data->order_id=$request->order_id;
        $data->enquiry_id=$request->enquiry_id;
        $data->seller_unit_rate=$request->seller_unit_rate;
        $data->price_unit_rate=$request->price_unit_rate;
        $data->buyer_unit_rate=$request->buyer_unit_rate;
        $data->total_margin=$request->total_margin;
        $data->agreemant_date=$request->agreemant_date;
        $data->kb_agreed=$request->kb_agreed;
        $data->margin_secured=$request->margin_secured;
        $data->commants=$request->commants;
        $data->save();
        $response=array("status"=>200,"message"=>"data updated successfully !!");
        return $response;
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $data=Margin::findOrFail($id);
        $data->status="0";
        $data->save();
        $response=array("status"=>200,"message"=>"data deleted successfully !!");
        return $response;
    }
}
