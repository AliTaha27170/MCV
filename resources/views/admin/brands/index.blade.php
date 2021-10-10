@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Brands</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
               
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Brand Name</th>
                            <th>Logo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->name}}</td>
                            <td><img width="70" src="/img/{{$brand->image}}" ></td>
                            <td>
                                <a type="button" href="/administrator/brands/{{$brand->id}}/edit " class="btn btn-primary">Edit</a>
                                <form method="POST" action="{{route('brands.destroy',$brand->id)}}" style="display: none;">
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
                            <th>Brand Name</th>
                            <th>Logo</th>
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