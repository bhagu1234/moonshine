<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $data=Country::orderBy('id','DESC')->where('status','1')->get();
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            $tr.="<tr>
                <td>".$no++."</td>
                <td>".$row->country_name."</td>
                <td>
                    <a href='#' id='edit_country' data-value=".$row->id.">edit</a>
                    <a href='#' id='delete_country' data-value=".$row->id.">delete</a>
                </td>
            </tr>";
        }
        return $tr;

    }


    public function store(Request $request)
    {
        $country=new Country();
        $country->country_name=$request->countryname;
        $country->save();
        $response = array('status' => 'success', 'message' => 'Country Added successfully.','status' => 200); 
        return json_encode($response);
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $countrydata=Country::findOrFail($id);
        $countrydata->status='0';
        $countrydata->save();
        $response = array('status' => 'success', 'message' => 'Country Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $countrydata=Country::findOrFail($id);
        $country=$countrydata->country_name;
        $response=array('allData'=>$countrydata,'country'=>$country);
        return $response;

    }
    public function update(Request $request)
    {
        $id=$request->id;
        $country=Country::findOrFail($id);
        $country->country_name=$request->update_countryname;
        $country->save();
        $response = array('status' => 'success', 'message' => 'Country Updated successfully.','status' => 200); 
        return json_encode($response);
    }
}