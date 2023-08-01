<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressRegion;

class AddressRegionController extends Controller
{
   public function index(Request $request)
   {
        $data=AddressRegion::where('status','1')->orderBy('id','DESC')->get();
        $tr="";
        $no=1;
        foreach($data as $row)
        {
            $tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->name."</td>
                    <td>
                        <a href='#' id='edit_addressRegion' data-value=".$row->id."><i class='bx bxs-edit-alt'></i></a>
                        <a href='#' id='delete_addressRegion' data-value=".$row->id."><i class='bx bxs-trash'></i></a>
                    </td>
                </tr>";
        }
        return $tr;
   }
   public function store(Request $request)
   {
        $data=new AddressRegion();
        $data->name=$request->AddressRegion_name;
        $data->save();
        $response=array("status"=>200,"message"=>"data stored successfully !!");
   }
   public function edit(Request $request)
   {
        $data=AddressRegion::findOrFail($request->id);
        return $data;
   }
   public function update(Request $request)
   {
        $data=AddressRegion::findOrFail($request->id);
        $data->name=$request->addressRegion;
        $data->save();
        $response=array("status"=>200,"message"=>"data updated successfully !!");
   }
   public function delete(Request $request)
   {
        $data=AddressRegion::findOrFail($request->id);
        $data->status="0";
        $data->save();
        $response=array("status"=>200,"message"=>"data deleted successfully !!");
   }
}
