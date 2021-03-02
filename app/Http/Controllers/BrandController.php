<?php

namespace App\Http\Controllers;

use App\Brand;
use Image;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    protected function imageUploadFunction($request){
        $image     = $request->file('brand_image');
        $imageName = $image->getClientOriginalName();
        $directory ='admin/images/brand-images/';
        $imageUrl  = $directory. $imageName;
        //$image->move($directory, $imageName);
        Image::make($image)->resize(300,200)->save($imageUrl);

        return $imageUrl;
    }

    public function saveBrand(Request $request){

        $brand = new Brand();
        $brand->brand_name        = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_image       = $this->imageUploadFunction($request);
        $brand->status            = $request->status;
        $brand->save();

        return redirect('/brand/add-brand');
    }

    public function manageBrand(){
        $brands = Brand::all();
        return view('admin.brand.manage-brand',compact('brands'));
    }

    public function unpublishedBrand($id){
        $brand = Brand::find($id);
        $brand->status=0;
        $brand->save();

        return redirect('/brand/manage-brand');
    }

    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand->status=1;
        $brand->save();

        return redirect('/brand/manage-brand');
    }

    public function editBrand($id){
        $brand = Brand::where('id',$id)->first();
        return view('admin.brand.edit-brand',compact('brand'));
    }

    public function updateBrand(Request $request){
        $brand     = Brand::find($request->id);
        $image     =$request->file('brand_image');
        if ($image){
            unlink($brand->brand_image);
            $imageName =$image->getClientOriginalName();
            $directory ='admin/images/brand-images/';
            $imageUrl  =$directory.$imageName;
            Image::make($image)->resize(300,200)->save($imageUrl);
        }else{
            $imageUrl = $brand->brand_image;
        }
        $brand->brand_name        = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_image       = $imageUrl;
        $brand->status            = $request->status;
        $brand->save();

        return redirect('/brand/manage-brand');
    }

    public function deleteBrand(Request $request){
        $brand = Brand::find($request->id);
        unlink($brand->brand_image);
        $brand->delete();
        return redirect('/brand/manage-brand');
    }
}
