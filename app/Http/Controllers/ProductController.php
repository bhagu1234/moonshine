<?php

namespace App\Http\Controllers;
use App\Models\AddressType;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\District;
use App\Models\Region;
use App\Models\BaseProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubProduct;
use App\Models\Uom;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product=Product::leftJoin('countries as countries_a','countries_a.id','products.country_a')
                    ->leftJoin('countries as countries_b','countries_b.id','products.country_b')
                    ->leftJoin('countries as countries_c','countries_c.id','products.country_c')
                    ->leftJoin('categories','categories.id','products.category_id')
                    ->leftJoin('base_products','base_products.id','products.base_product_id')
                    ->leftJoin('sub_products','sub_products.id','products.sub_product_id')
                    ->leftJoin('uoms','uoms.id','products.umos_id')
                    ->select('products.*','countries_a.country_name as countryA','countries_b.country_name as countryB','countries_c.country_name as countryC','categories.category_name','base_products.product_name as base_product_name','sub_products.product_name as sub_product_name','uoms.name as uoms_name')
                    ->where('delete_status','1')
                    ->get();
        $no=1;
        $tr="";
        foreach($product as $row)
        {
            $tr.="<tr>
            <td> <a href='#' id='view_product' data-value=".$row->id."><i class='bx bxs-show'></i></a></td>
            <td>".$row->category_name."</td>
            <td>".$row->base_product_name."</td>
            <td>".$row->sub_product_name."</td>
            <td>".$row->product_specific_name."</td>
            <td>".$row->product_full_name."</td>
            <td>".$row->grades."</td>
            <td>".$row->standard."</td>
            <td>".$row->propertie."</td>
            <td>".$row->technical_specs."</td>
            <td>".$row->application."</td>
            <td>".$row->price_structure."</td>
            <td>".$row->packing_method."</td>
            <td>".$row->uoms_name."</td>
            <td>".$row->shipment_mode."</td>
            <td>".$row->weight_calculation."</td>
            <td>".$row->hs_code."</td>
            <td>".$row->countryA."</td>
            <td>".$row->countryB."</td>
            <td>".$row->countryC ."</td>
            <td>".$row->description."</td>
            <td>
                <a href='#' id='edit_product' data-value=".$row->id.">edit</a>
               
                <a href='#' id='delete_product' data-value=".$row->id.">delete</a>
            </td>
            </tr>";
        }
           
        return $tr;
    }
    public function store(Request $request)
    {
         	 	 	 	 	 	
        if($request->product_country_a=="null")
        {
            $request->product_country_a=null;
        }
        if($request->product_country_b=="null")
        {
            $request->product_country_b=null;
        }
        if($request->product_country_c=="null")
        {
            $request->product_country_c=null;
        }
        $product_data= new Product();
        $product_data->category_id=$request->product_category_name;
        $product_data->base_product_id=$request->product_baseProduct_name;
        $product_data->sub_product_id=$request->product_subProduct_name;
        $product_data->product_specific_name=$request->product_specific_name;
        $product_data->product_full_name=$request->product_full_name;
        $product_data->grades=$request->product_grades;
        $product_data->standard=$request->product_standards;
        $product_data->propertie=$request->product_DimensionsProperties;
        $product_data->technical_specs=$request->product_TechnicalSpecs;
        $product_data->application=$request->product_Applications;
        $product_data->price_structure=$request->product_PriceStructure;
        $product_data->packing_method=$request->product_PackingMethod;
        $product_data->umos_id=$request->product_UOM;
        $product_data->shipment_mode=$request->product_shipmentMode;
        $product_data->weight_calculation=$request->product_Weightcalculation;
        $product_data->hs_code=$request->product_HSCode;
        $product_data->country_a=$request->product_country_a;
        $product_data->country_b=$request->product_country_b;
        $product_data->country_c=$request->product_country_c;
        $product_data->description=$request->product_Comments;
        $product_data->save();
        $response = array('status' => 'success', 'message' => 'Product Added successfully.','status' => 200); 
        return json_encode($response);
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $product_data=Product::findOrFail($id);
        $categoryId=$product_data->category_id;
        $baseProductId=$product_data->base_product_id;
        $subProductId=$product_data->sub_product_id;
        $category_data=Category::where('status','1')->get();
        $base_prod_data=BaseProduct::where('category_id',$categoryId)->where('status','1')->get();
        $sub_prod_data=SubProduct::where('base_product_id',$baseProductId)->where('status','1')->get();
        $country_Data=Country::where('status','1')->get();
        $UOM_data=Uom::where('status','1')->get();
        $response=array('product_data'=>$product_data,'category'=>$category_data,'base_prod_data'=>$base_prod_data,'sub_prod_data'=>$sub_prod_data,'country_Data'=>$country_Data,'UOM_data'=>$UOM_data);
        return $response;
        
    }
    public function update(Request $request)
    {
        // dd($request);
        $id=$request->id;
        if($request->product_country_a=="null")
        {
            $request->product_country_a=null;
        }
        if($request->product_country_b=="null")
        {
            $request->product_country_b=null;
        }
        if($request->product_country_c=="null")
        {
            $request->product_country_c=null;
        }
        $product_data= Product::findOrFail($id);
        $product_data->category_id=$request->product_category_name;
        $product_data->base_product_id=$request->product_baseProduct_name;
        $product_data->sub_product_id=$request->product_subProduct_name;
        $product_data->product_specific_name=$request->product_specific_name;
        $product_data->product_full_name=$request->product_full_name;
        $product_data->grades=$request->product_grades;
        $product_data->standard=$request->product_standards;
        $product_data->propertie=$request->product_DimensionsProperties;
        $product_data->technical_specs=$request->product_TechnicalSpecs;
        $product_data->application=$request->product_Applications;
        $product_data->price_structure=$request->product_PriceStructure;
        $product_data->packing_method=$request->product_PackingMethod;
        $product_data->umos_id=$request->product_UOM;
        $product_data->shipment_mode=$request->product_shipmentMode;
        $product_data->weight_calculation=$request->product_Weightcalculation;
        $product_data->hs_code=$request->product_HSCode;
        $product_data->country_a=$request->product_country_a;
        $product_data->country_b=$request->product_country_b;
        $product_data->country_c=$request->product_country_c;
        $product_data->description=$request->product_Comments;
        $product_data->save();
        $response = array('status' => 'success', 'message' => 'Product Updated successfully.','status' => 200); 
        return json_encode($response);
    }
    public function view(Request $request)
    {
        $id=$request->id;
        $product=Product::leftJoin('countries as countries_a','countries_a.id','products.country_a')
                    ->leftJoin('countries as countries_b','countries_b.id','products.country_b')
                    ->leftJoin('countries as countries_c','countries_c.id','products.country_c')
                    ->leftJoin('categories','categories.id','products.category_id')
                    ->leftJoin('base_products','base_products.id','products.base_product_id')
                    ->leftJoin('sub_products','sub_products.id','products.sub_product_id')
                    ->leftJoin('uoms','uoms.id','products.umos_id')
                    ->select('products.*','countries_a.country_name as countryA','countries_b.country_name as countryB','countries_c.country_name as countryC','categories.category_name','base_products.product_name as base_product_name','sub_products.product_name as sub_product_name','uoms.name as uoms_name')
                    ->where('products.delete_status','1')
                    ->where('products.id',$id)
                    ->first();
                    return $product;
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $productdata=Product::findOrFail($id);
        $productdata->delete_status='0';
        $productdata->save();
        $response = array('status' => 'success', 'message' => 'product Deleted successfully.','status' => 200); 
        return json_encode($response);
    }
    public function getCategoryDetails(Request $request)
    {
        $category=Category::where('status','1')->get();
        $UOM=Uom::where('status','1')->get();
        $country=Country::where('status','1')->get();
        $id=$request->id;
        $option="<option selected disabled value>...</option>";
        $categoryOptio=$option;
        $UOMOption=$option;
        $countryOPtion=$option;
        foreach($country as $r)
        {
            $countryOPtion.="<option value=".$r->id.">".$r->country_name."</option>";
        }
        foreach($UOM as $r)
        {
            $UOMOption.="<option value=".$r->id.">".$r->name."</option>";
        }
        foreach($category as $r)
        {
            $categoryOptio.="<option value=".$r->id.">".$r->category_name."</option>";
        }
        if($request->from=="category")
        {
            $BaseProduct=BaseProduct::where('category_id',$id)->where('status','1')->get();
            $BaseProduct_option=$option;
            foreach($BaseProduct as $r)
            {
                $BaseProduct_option.="<option value=".$r->id.">".$r->product_name."</option>";
            }
            return $BaseProduct_option;
        }
        elseif($request->from=="base_product")
        {
            $SubProduct=SubProduct::where('base_product_id',$id)->where('status','1')->get();
            $SubProduct_option=$option;
            foreach($SubProduct as $r)
            {
                $SubProduct_option.="<option value=".$r->id.">".$r->product_name."</option>";
            }
            return $SubProduct_option;
        }
        if($request->from=="open_from")
        {
            $response=array('country'=>$countryOPtion,'UOM'=>$UOMOption,'Category'=>$categoryOptio);
            return $response;
        }
    }
}
