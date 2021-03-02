<?php

namespace App\Http\Controllers;

use App\Slider;
use Image;
use Illuminate\Http\Request;
use orderBy;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }
    protected function sliderImageUpload($request){
        $image = $request->file('slider_image');
        $imageName = $image->getClientOriginalName();
        $directory ='admin/images/slider-images/';
        $imageUrl =($directory.$imageName);
        Image::make($image)->resize(1680,800)->save($imageUrl);
        return $imageUrl;
    }
    public function saveSlider(Request $request){
        $this->validate($request,[
            'slider_image'      =>'required',
            'slider_title'      =>'required|max:255',
            'slider_sub_title'  =>'required',
            'status'            =>'required',
        ]);
        $slider = new Slider();
        $slider->slider_image       =$this->sliderImageUpload($request) ;
        $slider->slider_title       = $request->slider_title;
        $slider->slider_sub_title   = $request->slider_sub_title;
        $slider->status             = $request->status;
        $slider->save();

        return redirect('slider/add-slider');
    }

    public function manageSlider(){
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('admin.slider.manage-slider',compact('sliders'));
    }

    public function unpublishedSlider($id){
        $slider = Slider::find($id);
        $slider->status=0;
        $slider->save();
        return redirect('/slider/manage-slider');
    }
    public function publishedSlider($id){
        $slider = Slider::find($id);
        $slider->status=1;
        $slider->save();
        return redirect('/slider/manage-slider');
    }
    public function editSlider($id){
        $slider = Slider::where('id',$id)->first();
        return view('admin.slider.edit-slider',compact('slider'));
    }
    public function updateSlider(Request $request){
        $slider = Slider::find ($request->id);
        $slider->slider_title       = $request->slider_title;
        $slider->slider_sub_title   = $request->slider_sub_title;
        $slider->status             = $request->status;
        if ($request->file('slider_image')){
            unlink($slider->slider_image);
            $slider->slider_image   =$this->sliderImageUpload($request) ;
        }
        $slider->save();
        return redirect('/slider/manage-slider');
    }
    public function deleteSlider(Request $request){
        $slider = Slider::find($request->id);
        unlink($slider->slider_image);
        $slider->delete();
        return redirect('/slider/manage-slider');
    }

}
