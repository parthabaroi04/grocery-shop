@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('body')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Manage Category Tables</h1>
        <p class="mb-4"></p><!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sl No.</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @php($i=1)
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>{{$category->status ==1 ? 'Published':'Unpublished'}}</td>
                            <td>
                                @if($category->status ==1)
                                    <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up"></i></a>
                                @else
                                    <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-arrow-down"></i></a>
                                @endif
                                    <a href="{{route('edit-category',['id'=>$category->id])}}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>

                                    <a href="#" id="{{$category->id}}" class="delete-btn btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    <form id="deleteForm{{$category->id}}" action="{{route('delete-category')}}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$category->id}}">
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
