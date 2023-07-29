<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\District;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data=User::leftJoin('countries','countries.id','users.country')
                    ->leftJoin('cities','cities.city_id','users.city')
                    ->leftJoin('states','states.state_id','users.state')
                    ->select('users.*','cities.city_name','states.name as state_name','countries.country_name as countryname')
                    ->orderBY('users.id','DESC')
                    ->get();
                    // dd($data);
        $tr="";
        $no=1;
        foreach($data as $row)
        {
            if($row->delete_status==1)
            {
                $tr.="<tr>
                    <td>".$no++."</td>
                    <td>".$row->first_name."</td>
                    <td>".$row->last_name."</td>
                    <td>".$row->email."</td>
                    <td>".$row->countryname."</td>
                    <td>".$row->state_name."</td>
                    <td>".$row->city_name."</td>
                    <td>".$row->pin_code."</td>
                   <td>
                       <a href='#' id='edit_user' data-value=".$row->id .">edit</a>
                       <a href='#' id='delete_user' data-value=".$row->id .">delete</a>
                    </td>
               </tr>";
           }
        }
        return $tr;
    }
    public function store(Request $request)
    {
        // dd($request);
        if($request->user_country=="null")
        {
            $request->user_country=null;
        }
        if($request->userState=="null")
        {
            $request->userState=null;
        }
        if($request->userDistrict=="null")
        {
            $request->userDistrict=null;
        }
        if($request->userCity=="null")
        {
            $request->userCity=null;
        }
        // dd($request);
        $user=new  User();
        $user->first_name=$request->fname;
        $user->last_name=$request->lname;
        $user->email=$request->uemail;
        $user->password=Hash::make($request->user_password);
        $user->country=$request->user_country;
        $user->state=$request->userState;
        $user->district=$request->userDistrict;
        $user->city=$request->userCity;
        $user->pin_code=$request->upincode;
        
        $user->save();
        $response = array('status' => 'success', 'message' => 'user Added successfully.','status' => 200); 
        return json_encode($response);
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $userdata=User::findOrFail($id);
        $userdata->delete_status='0';
        $userdata->save();
        $response = array('status' => 'success', 'message' => 'user Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $userdata=User::findOrFail($id);
        $countryId=$userdata->country;
        $state_id=$userdata->state;
        $districtId=$userdata->district;
        $state=State::where('country_id',$countryId)->orderBy('state_id','DESC')->get();
        $district=District::where('state_id',$state_id)->get();
        $city=City::where('district_id',$districtId)->get();
        $response=array('allData'=>$userdata,'state'=>$state,'district'=>$district,'city'=>$city);
        return $response;

    }
    public function update(Request $request)
    {
        $id=$request->id;
        // dd($request);
        $user=User::findOrFail($id);
        $user->first_name=$request->update_fname;
        $user->last_name=$request->update_lname;
        $user->email=$request->update_uemail;
        $user->country=$request->update_usercountry;
        $user->state=$request->update_UserState;
        $user->district=$request->update_UserDistrict;
        $user->city=$request->update_UserCity;
        $user->pin_code=$request->update_upincode;
        $user->save();
        $response = array('status' => 'success', 'message' => 'User Updated successfully.','status' => 200); 
        return json_encode($response);
    }

}
