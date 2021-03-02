@extends('admin.master')

@section('title')
    Add Slider
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-primary">Add Slider</h3>
                    </div>
                    <div class="card-body">
                        <form method="Post" action="{{route('save-slider')}}" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <label class="col-md-3 text-secondary"><h4>Slider Image</h4></label>
                                <div class="col-md-9">
                                    <img src="" width="763" height="250"  id="show_image">
                                    <input type="file" name="slider_image" onchange="showImage(this,'show_image')">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3"><h4>Slider Title</h4></label>
                                <div class="col-md-9">
                                    <input type="text" name="slider_title" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Slider Sub Title</label>
                                <div class="col-md-9">
                                    <input type="text" name="slider_sub_title" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <input type="radio" name="status" value="1" class="m-2">Published
                                    <input type="radio" name="status" value="0" class="m-2">UnPublished
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" value="Add Slider Image" name="add_slider_img" class="btn btn-success form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
