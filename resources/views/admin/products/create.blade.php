@extends('admin.layouts.master')
@section('content')
<style>
.form-control { width:90%;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Add New Product</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name here">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="category_id" class="form-control" >
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter product Description"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code</label>
                                        <input type="text" name="code" class="form-control" placeholder="Enter code here">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Brand</label>
                                        <select name="brand_id" class="form-control" >
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Big Image</label>
                                        <input type="file" name="big_image" class="form-control">
                                    </div>
                                </div>
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