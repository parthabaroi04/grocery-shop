@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-primary">Edit Category</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-category')}}" method="POST"class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <label class="col-md-3">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}"/>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Category Description</label>
                                <div class="col-md-9">
                                    <input type="text" name="category_description" class="form-control" value="{{$category->category_description}}">
                                    <input type="hidden" name="id" class="form-control" value="{{$category->id}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-3">Publication Status</label>
                                <div class="col-md-9">
                                    <input type="radio" name="status" value="1" {{$category->status == 1 ? 'Checked':''}} class="m-2">Published
                                    <input type="radio" name="status" value="0" {{$category->status == 0 ? 'Checked':''}} class="m-2">Unpublished
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-9 offset-3">
                                    <input type="submit" value="Update Category Info" name="submit" class="btn btn-success btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

