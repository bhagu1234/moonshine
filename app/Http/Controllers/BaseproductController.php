<?php
namespace App\Http\Controllers;
use App\Models\BaseProduct;
use App\Models\Category;
use Illuminate\Http\Request;
class BaseproductController extends Controller
{
    public function index(Request $request)
    {
        $data = BaseProduct::orderBY('base_products.id','DESC')
            ->join('categories','categories.id','base_products.category_id')
            ->select('base_products.*','category_name as categoryname')
            ->where('base_products.status','1')->get();
        $no = 1;
        $tr = "";
        foreach ($data as $row) {
            $tr .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $row->product_name. "</td>
                <td>" . $row->categoryname. "</td>
                <td>
                    <a href='#' id='edit_baseproduct' data-value=" .$row->id  .">edit</a>
                    <a href='#' id='delete_baseproduct' data-value=".$row->id  .">delete</a>
                </td>
            </tr>";
        }
        return $tr;
    } 
    public function getDetails(Request $request)
    { 
        $category=Category::where('status',1)->get();
        $option="<option selected disabled value>...</option>";
        $categoryOPtion=$option;
        foreach($category as $b)
        {
            $categoryOPtion.="<option value=".$b->id .">".$b->category_name."</option>";
        }
        return $categoryOPtion;
    }
    public function store(Request $request)
    {
        $baseproduct= new BaseProduct();
        $baseproduct->category_id= $request->create_category;
        $baseproduct->product_name= $request->baseproductname;
        $baseproduct->save();
        $response = array('status' => 'success', 'message' => 'BaseProduct Added successfully.', 'status' => 200);
        return json_encode($response);
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $baseproductdata = BaseProduct::findOrFail($id);
        $baseproductdata->status='0';
        $baseproductdata->save();
        $response = array('status' => 'success', 'message' => 'Baseproduct Deleted successfully.', 'status' => 200);
        return json_encode($response);
    }
    public function edit(Request $request)
    { 
        $id = $request->id;
        $baseproductdata =BaseProduct::findOrFail($id);
        $category =Category::where('status',1)->get();//for state in edit form for oldvalue
        $response = array('allData' =>$baseproductdata,'category' =>$category);
        return $response;
    }
    public function update(Request $request)
    {
        $id = $request->id;
        $baseproduct = BaseProduct::findOrFail($id);
        $baseproduct->product_name = $request->update_productname;
        $baseproduct->category_id= $request->updatecategory;
        $baseproduct->save();
        $response = array('status' => 'success', 'message' => 'BaseProduct Updated successfully.', 'status' => 200);
        return json_encode($response);
    }
}
