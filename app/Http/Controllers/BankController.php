<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bank;

class BankController extends Controller
{
    public function store(Request $request)
    {	 
        // dd($request);
        $data=new Bank();
        if($request->check_sup_cus=='customer')
        {
            $data->customer_id=$request->bankCustomer;
        }
        elseif($request->check_sup_cus=='suplier')
        {
            $data->supplier_id=$request->bankCustomer; 
        }
        
        $data->bank_name=$request->create_bankNameCustomer;
        $data->branch_name=$request->create_BranchNameCustomer;
        $data->bank_address=$request->create_bankAddressCustomer;
        $data->account_holder_name=$request->create_AccountHolderCustomer;
        $data->account_number=$request->create_AccountNumberCustomer;
        $data->iban_account_number=$request->create_IBANAccountNumberCustomer;
        $data->pr_officer=$request->create_pr_officerCustomer;
        $data->bank_email_id=$request->create_BankEmailCustomer;
        $data->SWIFT_code=$request->create_SWIFT_codeCustomer;
        $data->IFSC_code=$request->create_IFSC_codeCustomer;
        $data->bank_rating=$request->create_bankRatingCustomer;
        $data->direct_fac=$request->create_directFacCustomer;
        $data->indirect_fac=$request->create_IndirectFacCustomer;
        $data->bank_reference=$request->create_bankReferenceCustomer;
        $data->comments=$request->create_CommentsCustomer;
        $data->save();
        $response=array('status'=>'200','data'=>'Bank created succefully');
        return $response;
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $data=Bank::findOrFail($id);
        return $data;
    }
    public function update(Request $request)
    {
        // dd($request);
        $id=$request->id;
        $data=Bank::findOrFail($id);
        if($request->check_sup_cus=='customer')
        {
            $data->customer_id=$request->bankCustomer;
        }
        elseif($request->check_sup_cus=='suplier')
        {
            $data->supplier_id=$request->bankCustomer; 
        }
        $data->bank_name=$request->create_bankNameCustomer;
        $data->branch_name=$request->create_BranchNameCustomer;
        $data->bank_address=$request->create_bankAddressCustomer;
        $data->account_holder_name=$request->create_AccountHolderCustomer;
        $data->account_number=$request->create_AccountNumberCustomer;
        $data->iban_account_number=$request->create_IBANAccountNumberCustomer;
        $data->pr_officer=$request->create_pr_officerCustomer;
        $data->bank_email_id=$request->create_BankEmailCustomer;
        $data->SWIFT_code=$request->create_SWIFT_codeCustomer;
        $data->IFSC_code=$request->create_IFSC_codeCustomer;
        $data->bank_rating=$request->create_bankRatingCustomer;
        $data->direct_fac=$request->create_directFacCustomer;
        $data->indirect_fac=$request->create_IndirectFacCustomer;
        $data->bank_reference=$request->create_bankReferenceCustomer;
        $data->comments=$request->create_CommentsCustomer;
        $data->save();
        $response=array('status'=>'200','data'=>'Bank updated succefully');
        return $response;
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $data=Bank::findOrFail($id);
        $data->status='0';
        $data->save();
        $response=array('status'=>'200','data'=>'Bank deleted succefully');
        return $response;
    }
}
