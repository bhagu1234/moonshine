<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index(Request $request)
    {
      $data = District::orderBY('districts.district_id','DESC')
            ->join('states','states.state_id','districts.state_id')
            ->select('districts.*','states.name as statename')
            ->where('districts.status','1')->get();
      $no = 1;
      $tr = "";
      foreach ($data as $row) {
            $tr .= "<tr>
                 <td>" . $no++ . "</td>
                 <td>" . $row->statename. "</td>
                 <td>" . $row->district_name. "</td>
                 <td>
                       <a href='#' id='edit_district' data-value=" .$row->district_id .">edit</a>
                       <a href='#' id='delete_district' data-value=".$row->district_id .">delete</a>
                  </td>
               </tr>";
        }
        return $tr;
      
    } 
 public function getDetails(Request $request)
    {
        $state=State::where('status',1)->get();
        $option="<option selected disabled value>...</option>";
        $sta_option=$option;
        foreach($state as $r)
        {
            $sta_option.="<option value=".$r->state_id.">".$r->name."</option>";
        }
        return $sta_option;
    }
 public function store(Request $request)
 {
    if ($request->create_state == "null") 
     {
        //  $request->create_state = null;
     }
     $district= new District();
     $district->state_id= $request->create_state;
     $district->district_name = $request->districtname;
     $district->save();
    if (empty($districtname)) {
       
        return response()->json(['status' => 'error', 'message' => 'Field is empty'], 422);
    } 
    $response = array('status' => 'success', 'message' => 'District Added successfully.', 'status' => 200);
    return json_encode($response);
 }
 public function delete(Request $request)
 {
   $id = $request->id;
   $districtdata = District::findOrFail($id);
   $districtdata->status='0';
   $districtdata->save();
   $response = array('status' => 'success', 'message' => 'District Deleted successfully.', 'status' => 200);
   return json_encode($response);
 }
 public function edit(Request $request)
 {
    $id = $request->id;
    $districtdata =District ::findOrFail($id);
    $state = State::where('status',1)->get();//for state in edit form for oldvalue
    $response = array('allData' => $districtdata, 'state' => $state);
     return $response;
 }
 public function update(Request $request)
 {
     $id = $request->id;
     $district = District::findOrFail($id);
     $district->state_id= $request->district_update_state;
     $district->district_name = $request->update_districtname;
     $district->save();
     $response = array('status' => 'success', 'message' => 'District Updated successfully.', 'status' => 200);
     return json_encode($response);
 }
 
}


