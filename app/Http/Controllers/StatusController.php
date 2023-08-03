<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        $data=Status::where('status','1')->orderBy('id','DESC')->get();
        $tr="";
        $no=1;
        foreach($data as $row)
        {
            $tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->name."</td>
                    <td>
                        <a href='#' id='edit_Status' data-value=".$row->id ."><i class='bx bxs-edit-alt'></i></a>
                        <a href='#' id='delete_Status' data-value=".$row->id ."><i class='bx bxs-trash'></i></a>
                    </td>
            </tr>";
        }
        return $tr;
    }
    public function store(Request $request)
    { 
        $status=new Status();
        $status->name=$request->statusname;
        $status->save();
        $response=array("status"=>200,"message"=>"data stored successfully !!");
    }
    public function edit(Request $request)
    {
        $status=Status::findOrFail($request->id);
        return $status;
    }
    public function update(Request $request)
    {
        $status=Status::findOrFail($request->id);
        $status->name=$request->status;
        $status->save();
        $response=array("status"=>200,"message"=>"data updated successfully !!");
    }
    public function delete(Request $request)
    {
        $status=Status::findOrFail($request->id);
        $status->status="0";
        $status->save();
        $response=array("status"=>200,"message"=>"data deleted successfully !!");
    }
}
