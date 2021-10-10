@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Main Categories</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <a type="button" href="/administrator/categories/{{$category->id}}/edit " class="btn btn-primary">Edit</a>
                                <form method="POST" action="{{route('categories.destroy',$category->id)}}" style="display: none;">
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
                            <th> Name</th>
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