@extends('admin.master')

@section('title')
    Add-Sub-Cat
@endsection

@section('body')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h3 class="text-center text-primary">Add SubCategory</h3>
                   </div>
                   <div class="card-body">
                       <form action="{{route('save-sub-category')}}" method="POST" class="form-horizontal">
                           @csrf
                           <div class="row col-md-12 form-group">
                               <label for="" class="col-md-3">Category Name</label>
                               <div class="col-md-9">
                                   <select class="form-control" name="category_id" id="category_id">
                                       <option value="">-- Select Category --</option>
                                       @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->category_name}}</option>
                                       @endforeach
                                   </select>
                               </div>
                           </div>
                           <div class="row col-md-12 form-group">
                               <label class="col-md-3">SubCategory Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="sub_cat_name" value="" class="form-control">
                               </div>
                           </div>
                           <div class="row col-md-12 form-group">
                               <label class="col-md-3">Publication Status</label>
                               <div class="col-md-9">
                                   <input type="radio" name="status" class="m-2" value="1">Published
                                   <input type="radio" name="status" class="m-2" value="0">Unpublished
                               </div>
                           </div>
                           <div class="row col-md-12 form-group">
                               <div class="col-md-9 offset-3">
                                   <input type="submit" name="btn" class="btn btn-success form-control" value="Save Sub Category">

                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
