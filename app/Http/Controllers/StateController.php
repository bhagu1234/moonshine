<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $data = State::orderBY('state_id', 'DESC')
            ->leftJoin('countries', 'countries.id', 'states.country_id')
            ->select('states.*', 'countries.country_name as countryname')
            ->where('states.status', '1')
            ->get();
        $no = 1;
        $tr = "";
        foreach ($data as $row) 
        {
            $tr .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $row->name . "</td>
                <td>" . $row->countryname . "</td>
                <td>
                    <a href='#' id='edit_state' data-value=" . $row->state_id . ">edit</a>
                    <a href='#' id='delete_state' data-value=" . $row->state_id . ">delete</a>
                </td>
            </tr>";
        }
        return $tr;
    }
    public function store(Request $request)
    {
        if ($request->create_country == "null") 
        {
            $request->create_country = null;
        }
        $state = new State();
        $state->name = $request->statename;
        $state->country_id = $request->create_country;
        $state->save();
        $response = array('status' => 'success', 'message' => 'State Added successfully.', 'status' => 200);
        return json_encode($response);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $statedata = State::where('state_id',$id)->first();
        $statedata->status = '0';
        $statedata->save();
        $response = array('status' => 'success', 'message' => 'State Deleted successfully.', 'status' => 200);
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $statedata = State::where('state_id',$id)->first();
        $country = Country::where('status', '1')->get();//for country in edit form for oldvalue
        $response = array('allData' => $statedata, 'country' => $country);
        return $response;
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $state =State::where('state_id',$id)->first();
        // dd($state);
        $state->name = $request->update_statename;
        $state->country_id = $request->state_update_country;
        $state->save();
        $response = array('status' => 'success', 'message' => 'State Updated successfully.', 'status' => 200);
        return json_encode($response);
    }
}
