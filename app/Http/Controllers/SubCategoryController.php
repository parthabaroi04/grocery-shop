<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function addSubcategory(){
        return view('admin.subcategory.add-subcategory');
    }
    public function manageSubcategory(){
        return view('admin.subcategory.manage-subcategory');
    }
}
