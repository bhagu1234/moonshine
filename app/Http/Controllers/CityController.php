<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\State;
use Illuminate\Http\Request;
class CityController extends Controller
{
    public function index(Request $request)
    {
        $data = City::orderBY('cities.city_id','DESC')
            ->join('districts','districts.district_id','cities.district_id')
            ->select('cities.*','district_name as districtname')
            ->where('cities.status','1')->get();
        $no = 1;
        $tr = "";
        foreach ($data as $row) 
        {
            $tr .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $row->city_name. "</td>
                <td>" . $row->districtname. "</td>
                <td>
                    <a href='#' id='edit_city' data-value=" .$row->city_id .">edit</a>
                    <a href='#' id='delete_city' data-value=".$row->city_id .">delete</a>
                </td>
            </tr>";
        }
        return $tr;
    } 
    public function getDetails(Request $request)
    { 
        $district=District::where('status',1)->get();
        $option="<option selected disabled value>...</option>";
        $districtOPtion=$option;
        foreach($district as $b)
        {
            $districtOPtion.="<option value=".$b->district_id.">".$b->district_name."</option>";
        }
        return $districtOPtion;
    }
    public function store(Request $request)
    {
        $city= new City();
        $city->district_id= $request->create_district;
        $city->city_name= $request->cityname;
        $city->save();
        $response = array('status' => 'success', 'message' => 'City Added successfully.', 'status' => 200);
        return json_encode($response);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $citydata = City::findOrFail($id);
        $citydata->status='0';
        $citydata->save();
        $response = array('status' => 'success', 'message' => 'City Deleted successfully.', 'status' => 200);
        return json_encode($response);
    }
   public function edit(Request $request)
   { 
        $id = $request->id;
        $citydata =City::findOrFail($id);
        $district =District::where('status',1)->get();//for state in edit form for oldvalue
        $response = array('allData' => $citydata,'district' =>$district);
        return $response;
   }
   public function update(Request $request)
   {
        $id = $request->id;
        $city = City::findOrFail($id);
        $city->district_id= $request->updatedistrict;
        $city->city_name = $request->update_cityname;
        $city->save();
        $response = array('status' => 'success', 'message' => 'City Updated successfully.', 'status' => 200);
        return json_encode($response);
   }
}
