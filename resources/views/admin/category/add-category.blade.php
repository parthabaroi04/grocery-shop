@extends('admin.master')

@section('body')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h3 class="text-center text-primary">Add Category</h3>
                   </div>
                   <div class="card-body">
                       <form action="{{route('save-category')}}" method="POST"class="form-horizontal">
                           @csrf
                           <div class="row form-group">
                               <label class="col-md-3">Category Name</label>
                               <div class="col-md-9">
                                   <input type="text" name="category_name" class="form-control" value="">
                               </div>
                           </div>
                           <div class="row form-group">
                               <label class="col-md-3">Category Description</label>
                               <div class="col-md-9">
                                   <input type="text" name="category_description" class="form-control" value="">
                               </div>
                           </div>
                           <div class="row form-group">
                               <label class="col-md-3">Publication Status</label>
                               <div class="col-md-9">
                                   <input type="radio" name="status" value="1"class="m-2">Published
                                   <input type="radio" name="status" value="0"class="m-2">Unpublished
                               </div>
                           </div>
                           <div class="row form-group">
                               <div class="col-md-9 offset-3">
                                   <input type="submit" value="Save Category Info" name="submit" class="btn btn-info btn-block">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection
