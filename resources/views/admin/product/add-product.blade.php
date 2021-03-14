@extends('admin.master')

@section('title')
    add-product
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-center text-white">Add Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="col-sm-12" for="name">Brand Name</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>Select Brand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-12" for="name">Category Name</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="col-sm-12" for="name">subCat Name</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>Select SubCat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-sm-12" for="name">Category Name</label>
                                <div class="col-sm-12">
                                    <select class="form-control">
                                        <option>Select Category</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

