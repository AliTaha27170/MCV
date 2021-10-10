@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Brand</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Brand Name </label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Brand Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Logo</label>
                                <input type="file" name="image" class="form-control" placeholder="Enter Brand Logo">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" class="form-control" ></textarea>
                            </div>
                        
                        <!-- /.box-body -->
        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </form>
                <!-- /.box -->
      
            </div>
              
        </div>
        <!-- /.row -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection