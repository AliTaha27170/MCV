@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Products</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Code</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Ingredients</th>
                            <th>Details</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->code}}</td>
                            <td><img width="70" src="/img/products/{{$product->image}}" ></td>
                            <td>{{$product->category->name}}</td>
                            <th><a type="button" href="/administrator/Product_ingredients/{{$product->id}}" style="background-color: #2ea06c;" class="btn btn-success">Ingredients</a></th>
                            <th><a type="button" href="/administrator/Product_details/{{$product->id}}" style="background-color: #2ea06c;" class="btn btn-success">Details</a></th>
                            <td>
                                <a type="button" href="/administrator/products/{{$product->id}}/edit " class="btn btn-primary">Edit</a>
                                <form method="POST" action="{{route('products.destroy',$product->id)}}" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger">Delete</button>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                                <th>Product Name</th>
                                <th>Code</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Ingredients</th>
                                <th>Details</th>
                                <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
              
        </div>
       
    </section>

</div>
<!-- /.content-wrapper -->
@push('pageScripts')
    <script>
        $(function () {
        $('#example1').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
        })
    </script>
    <script>
        $('.btn-danger').click(function(){
            $(this).siblings('form').submit()
        });
    </script>
@endpush
@endsection