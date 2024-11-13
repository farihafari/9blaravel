<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    //
    function AddCategory(Request $request){
        $category = new Category();
        $category->name=$request->cname;
        $categoryImage = time().".".$request->cimage->extension();
    $request->cimage->move(public_path("assets/img/categories"),$categoryImage);
       $category->image = $categoryImage;
       $category->save();
    //    dd($category->image);
    return back()->with("categories","categories submitted");

    }
    // view
    function AllCategories(){
        $allCat = Category::all();
        // dd($allCat);
        return view("panel.view",compact("allCat"));
    }

    function updateCategories($keyId){
     
        $object = Category::find($keyId);
        // dd($object->name);
        return view("panel.update",compact("object"));
    }
    function EditCategory(Request $request){
        $object = Category::find($request->cid);
        if(isset($request->cimage)){
            $categoryImage = time().".".$request->cimage->extension();
            $request->cimage->move(public_path("assets/img/categories"),$categoryImage);
               $object->image = $categoryImage;
        }
        $object->name= $request->cname;
        $object->save();
        return redirect("detail")->with("updated","succesfully");
    }
function DeleteCategory($id){
$object = Category::find($id);
$object->delete();
return redirect("detail")->with("deleted","succesfully");
}
}
