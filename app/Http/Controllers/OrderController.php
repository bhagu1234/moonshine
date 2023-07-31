<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddressType;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return view('order.index');
    }
    public function store(Request $request)
    {
        
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
