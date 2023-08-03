<?php
namespace App\Http\Controllers;
use App\Models\BaseProduct;
use App\Models\SubProduct;
use Illuminate\Http\Request;
class SubproductController extends Controller
{
  public function index(Request $request){
    $data = SubProduct::orderBY('sub_products.id','DESC')
      ->join('base_products','base_products.id','sub_products.base_product_id')
      ->select('base_products.product_name as basePro','sub_products.*')//query for duplicate column name
      ->where('sub_products.status','1')->get();
      $no = 1;
      $tr = "";
      foreach ($data as $row) {
        $tr .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $row->product_name. "</td>
                <td>" . $row->basePro. "</td>
                <td>
                      <a href='#' id='edit_subproduct' data-value=" .$row->id  .">edit</a>
                      <a href='#' id='delete_subproduct' data-value=".$row->id  .">delete</a>
                  </td>
               </tr>";
        }
        return $tr;
  } 
  public function getDetails(Request $request){ 
    $baseproduct=BaseProduct::where('status',1)->get();
    $option="<option selected disabled value>...</option>";
    $baseproductOPtion=$option;
    foreach($baseproduct as $b)
      {
        $baseproductOPtion.="<option value=".$b->id .">".$b->product_name."</option>";
      }
    return $baseproductOPtion;
  }
  public function store(Request $request){
    $subproduct= new SubProduct();
    $subproduct->base_product_id= $request->create_baseproduct;
    $subproduct->product_name= $request->subproductname;
    $subproduct->save();
    $response = array('status' => 'success', 'message' => 'SubProduct Added successfully.', 'status' => 200);
    return json_encode($response);
  }
  public function delete(Request $request){
    $id = $request->id;
    $subproductdata = SubProduct::findOrFail($id);
    $subproductdata->status='0';
    $subproductdata->save();
    $response = array('status' => 'success', 'message' => 'Subproduct Deleted successfully.', 'status' => 200);
    return json_encode($response);
  }
  public function edit(Request $request){ 
    $id = $request->id;
    $subproductdata =SubProduct::findOrFail($id);
    $baseproduct=BaseProduct::where('status',1)->get();//for state in edit form for oldvalue
    $response = array('allData' =>$subproductdata,'baseproduct' =>$baseproduct);
    return $response;
  }
  public function update(Request $request){
    $id = $request->id;
    $subproduct = SubProduct::findOrFail($id);
    $subproduct->product_name =$request->update_product;
    $subproduct->base_product_id=$request->updatebaseproduct;
    $subproduct->save();
    $response = array('status' => 'success', 'message' => 'SubProduct Updated successfully.', 'status' => 200);
    return json_encode($response);
  }
}
