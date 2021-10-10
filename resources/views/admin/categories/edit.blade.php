@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Category</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
               
                <!-- form start -->
                <form role="form" method="post" action="{{route('categories.update',$category->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea name="description" class="form-control" >{{$category->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Cover Picture</label>
                        <input type="file" name="image" class="form-control" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
      
            </div>
              
        </div>
        <!-- /.row -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection