@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit brand</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
               
                <form role="form" method="post" action="{{route('brands.update',$brand->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand Name </label>
                        <input type="text" name="name" class="form-control" value="{{$brand->name}}" placeholder="Enter Brand Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Logo</label>
                        <input type="file" name="image" class="form-control" placeholder="Enter Brand Logo">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" class="form-control" >{{$brand->description}}</textarea>
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