<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressType;

class AddressTypeController extends Controller
{
    public function index(Request $request)
    {
        $data=AddressType::where('status','1')->orderBy('address_id','DESC')->get();
        $tr="";
        $no=1;
        foreach($data as $row)
        {
            $tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->address_name."</td>
                    <td>
                        <a href='#' id='edit_AddressType' data-value=".$row->address_id ."><i class='bx bxs-edit-alt'></i></a>
                        <a href='#' id='delete_AddressType' data-value=".$row->address_id ."><i class='bx bxs-trash'></i></a>
                    </td>
            </tr>";
        }
        return $tr;
    }
    public function store(Request $request)
    {
        $data=new AddressType();
        $data->address_name=$request->AddressType_name;
        $data->save();
        $response=array("status"=>200,"message"=>"data stored successfully !!");
    }
    public function edit(Request $request)
    {
        $data=AddressType::findOrFail($request->id);
        return $data;
    }
    public function update(Request $request)
    {
        $data=AddressType::findOrFail($request->id);
        $data->address_name=$request->addressType;
        $data->save();
        $response=array("status"=>200,"message"=>"data updated successfully !!");
    }
    public function delete(Request $request)
    {
        $data=AddressType::findOrFail($request->id);
        $data->status="0";
        $data->save();
        $response=array("status"=>200,"message"=>"data deleted successfully !!");
    }
}
