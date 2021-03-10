<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
class SubCategoryController extends Controller
{
    public function addSubcategory(){
        $categories = Category::where('status',1)->OrderBy('category_name','ASC')->get();
        return view('admin.subcategory.add-subcategory',compact('categories'));
    }
    public function saveSubCategory(Request $request){
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_cat_name = $request->sub_cat_name;
        $subCategory->status = $request->status;
        $subCategory->save();

        return redirect('/subcategory/add-subcategory');
    }
    public function manageSubcategory(){
        $subCategories = SubCategory::OrderBy('id','DESC')->get();
        return view('admin.subcategory.manage-subcategory',compact('subCategories'));
    }

    public function unpublishedSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory ->status=0;
        $subCategory->save();

        return redirect('/subcategory/manage-subcategory');
    }
    public function publishedSubCategory($id){
        $subCategory = SubCategory::find($id);
        $subCategory ->status=1;
        $subCategory->save();

        return redirect('/subcategory/manage-subcategory');
    }
    public function editSubcategory($id){
        $categories = Category::where('status',1)->OrderBy('category_name','ASC')->get();
        $subCategory = SubCategory::where('id',$id)->first();
        return view('admin.subcategory.edit-subcategory',compact('categories','subCategory'));
    }
    public function updateSubCategory(Request $request){
        $subCategory = SubCategory::find($request->id);
        $subCategory->category_id = $request->category_id;
        $subCategory->sub_cat_name = $request->sub_cat_name;
        $subCategory->status = $request->status;
        $subCategory->save();
        return redirect('/subcategory/manage-subcategory');
    }
    public function deleteSubCategory(Request $request){
        $subCategory = SubCategory::find($request->id);
        $subCategory->delete();
        return redirect('/subcategory/manage-subcategory');
    }

}
