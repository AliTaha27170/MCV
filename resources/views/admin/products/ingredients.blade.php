@extends('admin.layouts.master')
@section('content')
<style>
.form-control {
    width: 95%;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Ingredients of {{$product->name}}</h1>
    </section>

    <section class="content">
        <form method="post" action="{{route('Product_ingredients.store')}}">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Component</label>
                        <input type="text" name="component" class="form-control" placeholder="Enter component here">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Amount</label>
                        <input type="text" name="amount" class="form-control" placeholder="Enter amount here">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Daily Value</label>
                        <input type="text" name="daily_value" class="form-control" placeholder="Enter daily value here">
                    </div>
                </div>
            </div>
            <input type="hidden" name="product_id" value="{{$product->id}}">
            <button type="submit" style="margin-left: 94%; margin-bottom: 70px;" class="btn btn-primary">Add</button>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Component</th>
                            <th>Amount</th>
                            <th>Daily value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ingredients as $item)
                        <tr>
                            <td>{{$item->component}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->daily_value}}</td>
                            <td>
                                <form method="POST" action="{{route('Product_ingredients.destroy',$item->id)}}" style="display: none;">
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
                            <th>Component</th>
                            <th>Amount</th>
                            <th>Daily value</th>
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