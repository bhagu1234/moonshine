<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $data=Customer::all();
        // dd($data);
        $no=1;
        $tr="";
        foreach($data as $row)
        {
            $tr.="<tr>
                <td>".$no++."</td>
                <td>".$row->customer_id."</td>
                <td>".$row->user_id."</td>
                <td>".$row->company_detail_id."</td>
                <td>".$row->bank_id."</td>
                <td>".$row->group_cos."</td>
                <td>".$row->address1."</td>
                <td>".$row->address2."</td>
                <td>".$row->area."</td>
                <td>".$row->landmark."</td>
                <td>".$row->country."</td>
                <td>".$row->state."</td>
                <td>".$row->city."</td>
                <td>".$row->address_type."</td>
                <td>".$row->phone_no."</td>
                <td>".$row->fax."</td>
                <td>".$row->location_email."</td>
                <td>".$row->customer_name."</td>
                <td>".$row->customer_email."</td>
                <td><a href='#'>edit</a><a href='delete'>delete</a></td>
            </tr>";

        }
        echo $tr;
        // return json_encode($data);
    }
}
