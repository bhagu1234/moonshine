<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category=Category::where('status','1')->orderBy('id','DESC')->get();
        $tr="";
        $no=1;
        foreach($category as $row)
        {
            $tr.="<tr>
                        <td>".$no++."</td>
                        <td>".$row->category_name."</td>
                        <td>
                            <a href='#' id='category_edit' data-value=".$row->id.">edit</a>
                            <a href='#' id='category_delete' data-value=".$row->id.">delete</a>
                        </td>
                </tr>";
        }
        return $tr;
    }
    public function store(Request $request)
    {
        $category= new Category();
        $category->category_name=$request->category_name;
        $category->save();
        $response=array('status' => 'success', 'message' => 'category Added successfully.','status' => 200); 
        return $response;
    }
    public function edit(Request $request)
    {
        $id=$request->id;
        $category=Category::findOrFail($id); 
        return $category;
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $category=Category::findOrFail($id);
        $category->category_name=$request->category_name;
        $category->save();
        $response=array('status' => 'success', 'message' => 'category updated successfully.','status' => 200);  
    }
    public function delete(Request $request)
    {
        $id=$request->id;
        $category=Category::findOrFail($id);
        $category->status="0";
        $category->save();
        $response=array('status' => 'success', 'message' => 'category updated successfully.','status' => 200); 
    }
}
