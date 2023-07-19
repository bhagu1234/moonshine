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
                    <td>".$row->user_email."</td>
                    <td>".$row->status."</td>
                    <td>".$row->otp."</td>
                    <td>".$row->entry_time."</td>
                    <td>".$row->payroll."</td>
                    <td>".$row->countryname."</td>
                    <td>".$row->state_name."</td>
                    <td>".$row->city_name."</td>
                    <td>".$row->pin_code."</td>
                   <td>
                       <a href='#' id='edit_user' data-value=".$row->user_id .">edit</a>
                       <a href='#' id='delete_delete' data-value=".$row->user_id .">delete</a>
                    </td>
               </tr>";
           }
        }
        return $tr;
    }


}
