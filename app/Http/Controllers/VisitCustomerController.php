<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VisitCustomer;

class VisitCustomerController extends Controller
{
    public function index(Request $request)
    {
        $data = VisitCustomer::where('visit_customers.status','1')
            ->join('customers','customers.id','visit_customers.customer_id')
            ->leftJoin('contacts','contacts.customer_id','customers.id')
            ->leftJoin('users','users.id','visit_customers.visit_by_id')
            ->select('visit_customers.*','customers.customer_name','contacts.first_name as ContactFname','contacts.last_name as ContactLname','contacts.designation','contacts.mobile_no as contactNumber','contacts.contact_email','contacts.contact_email2','users.first_name','users.last_name')
            ->get();
        $tr="";
        foreach($data as $row)
        {
            $tr.="<tr>
                <td><a href='#' onclick='view_VisitCustomer(".$row->id.")' data-value=".$row->id."><i class='bx bxs-show'></i></a></td>
                </td>".$row->customer_name."</td>
                </td>".date("d/m/20y", strtotime($row->visit_date))."</td>
                </td>".$row->visit_am_pm."</td>
                </td>".$row->visit_place."</td>
                </td>".$row->first_name. " " .$row->last_name."</td>
                </td></td>
                </td>".$row->ContactFname. " " .$row->ContactLname."</td>
                </td>".$row->designation."</td>
                </td>".$row->contactNumber."</td>
                </td>".$row->contact_email."</td>
                </td>".$row->contact_email2."</td>
                </td>".$row->visit_purpose."</td>
                </td>".$row->outcome_visit."</td>
                </td>".$row->visit_rating."</td>
                </td>".date("d/m/20y", strtotime($row->next_up_date))."</td>
                </td>".date("d/m/20y", strtotime($row->next_visit_date))."</td>
                </td></td>
                </td>".$row->comment."</td>
                </td>
                    <a href='#' id='edit_VisitCustData' data-value=".$row->id."><i class='bx bxs-edit-alt'></i></a>
                    <a href='#' id='delete_VisitCustData' data-value=".$row->id."><i class='bx bxs-trash'></i></a>
                    </td>
            </tr>";
        }
        return $tr;
    }
    public function create(Request $request)
    { 	 	 	 	 
        
    }
    public function store(Request $request)
    {
        $data=new VisitCustomer();
        $data->customer_id=$request->customer_id;
        $data->contact_id=$request->customer_id;
        $data->visit_date=$request->customer_id;
        $data->visit_am_pm=$request->customer_id;
        $data->visit_place=$request->customer_id;
        $data->business_nature_id=$request->customer_id;
        $data->category_id=$request->customer_id;
        $data->visit_by_id=$request->customer_id;
        $data->visit_purpose=$request->customer_id;
        $data->outcome_visit=$request->customer_id;
        $data->visit_rating=$request->customer_id;
        $data->next_visit_date=$request->customer_id;
        $data->next_up_date=$request->customer_id;
        $data->comment=$request->customer_id;
        $data->save();
        $response=array("status"=>200,'message'=>"Data stored successfully !!");
        return $response;
    }
    public function edit(Request $request)
    {
        
    }
    public function update(Request $request)
    {
        
    }
    public function delete(Request $request)
    {
        
    }
    public function view(Request $request)
    {
        
    }
    
}
