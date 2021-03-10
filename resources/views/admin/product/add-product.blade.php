@extends('admin.master')

@section('title')
    add-product
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h4 class="text-center text-white">Add Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <label class="col-md-3" for="name">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control">
                                    <option>Select Brand</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

