@extends('admin.master')

@section('title')
    Edit Slider
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-primary">Edit Slider</h3>
                    </div>
                    <div class="card-body">
                        <form method="Post" action="{{route('update-slider')}}" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <label class="col-md-3 text-secondary"><h4>Slider Image</h4></label>
                                <div class="col-md-9">
                                    <img src="{{asset($slider->slider_image)}}" width="763" height="250" id="show_image">
                                    <input type="file" name="slider_image" value="" onchange="showImage(this,'show_image')">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3"><h4>Slider Title</h4></label>
                                <div class="col-md-9">
                                    <input type="text" name="slider_title" value="{{$slider->slider_title}}" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Slider Sub Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="slider_sub_title" value="{{$slider->slider_sub_title}}" class="form-control"/>
                                    <input type="hidden" name="id" value="{{$slider->id}}" class="form-control"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <input type="radio" name="status" value="1" {{$slider->status==1 ? 'checked':''}} class="m-2"/>Published
                                    <input type="radio" name="status" value="0" {{$slider->status==0 ? 'checked':''}} class="m-2"/>UnPublished
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" value="Update Slider Information" name="add_slider_img" class="btn btn-success form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
