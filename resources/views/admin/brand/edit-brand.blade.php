@extends('admin.master')

@section('title')
    Brand Edit
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-primary text-center">Edit Brand</h3>
                    </div>
                    <div class="card-body">
                        <form name="" action="{{route('update-brand')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row col-md-12 form-group">
                                <label class="col-md-3">Brand Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}">
                                    <input type="hidden" name="id" class="form-control" value="{{$brand->id}}">
                                </div>
                            </div>
                            <div class="row form-group col-md-12">
                                <label class="col-md-3">Brand Description</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$brand->brand_description}}" name="brand_description" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group col-md-12">
                                <label class="col-md-3">Brand Image</label>
                                <div class="col-md-9">
                                    <input type="file" value="" name="brand_image" onchange="showImage(this,'show_image')">
                                    <img src="{{asset($brand->brand_image)}}" width="100px" height="100px" alt="" id="show_image">
                                </div>
                            </div>
                            <div class="row form-group col-md-12">
                                <label class="col-md-3">Status</label>
                                <div class="col-md-9">
                                    <input type="radio" value="1" {{$brand->status ==1 ? 'checked':''}} name="status" class="m-2">Published
                                    <input type="radio" value="0" {{$brand->status ==0 ? 'checked':''}} name="status" class="m-2">Unpublished
                                </div>
                            </div>
                            <div class="row form-group col-md-12">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" value="Update Brand" name="save_brand" class="text-center btn btn-success form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
