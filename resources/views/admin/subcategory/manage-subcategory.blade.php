@extends('admin.master')

@section('title')
    SubCat Manage
@endsection

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <p class="mb-4"></p><!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manage SubCat Table</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Category Name</th>
                            <th>SubCat Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sl No.</th>
                            <th>Category Name</th>
                            <th>SubCat Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @php($i=1)
                        @foreach($subCategories as $subCategory)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$subCategory->category->category_name}}</td>
                                <td>{{$subCategory->sub_cat_name}}</td>
                                <td>{{$subCategory->status ==1 ? 'Published':'Unpublished'}}</td>
                                <td>
                                    @if($subCategory->status ==1)
                                        <a href="{{route('unpublished-subcategory',['id'=>$subCategory->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                    @else
                                        <a href="{{route('published-subcategory',['id'=>$subCategory->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                    @endif
                                    <a href="{{route('edit-subcategory',['id'=>$subCategory->id])}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>

                                    <a href="#" id="{{$subCategory->id}}" class="delete-btn btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <form id="deleteForm{{$subCategory->id}}" action="{{route('delete-subCategory')}}"  method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$subCategory->id}}">
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection

