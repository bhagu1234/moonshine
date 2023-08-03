<?php

namespace App\Http\Controllers;

use App\Models\Uom;
use Illuminate\Http\Request;

class UomController extends Controller
{
    public function index(Request $request)
    {
        $data=Uom::where('status','1')->orderBy('id','DESC')->get();
        $tr="";
        $no=1;
        foreach($data as $row)
        {
            $tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->name."</td>
                    <td>
                        <a href='#' id='edit_Uom' data-value=".$row->id ."><i class='bx bxs-edit-alt'></i></a>
                        <a href='#' id='delete_Uom' data-value=".$row->id ."><i class='bx bxs-trash'></i></a>
                    </td>
            </tr>";
        }
        return $tr;
    }
    public function store(Request $request)
    { 
        $uom=new Uom();
        $uom->name=$request->uomname;
        $uom->save();
        $response=array("status"=>200,"message"=>"data stored successfully !!");
    }
    public function edit(Request $request)
    {
        $uom=Uom::findOrFail($request->id);
        return $uom;
    }
    public function update(Request $request)
    {
        $uom=Uom::findOrFail($request->id);
        $uom->name=$request->uom;
        $uom->save();
        $response=array("status"=>200,"message"=>"data updated successfully !!");
    }
    public function delete(Request $request)
    {
        $uom=Uom::findOrFail($request->id);
        $uom->status="0";
        $uom->save();
        $response=array("status"=>200,"message"=>"data deleted successfully !!");
    }
}
