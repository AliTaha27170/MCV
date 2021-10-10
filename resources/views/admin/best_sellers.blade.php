@extends('admin.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<style>
.search-nav {
    position: relative;
}
.search-result {
    position: absolute;
    width: 50%;
    top: 34px;
    z-index: 5;
    background: #fff;
    -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0 3px 4px;
    box-shadow: rgba(0, 0, 0, 0.1) 0 3px 4px;
    display: none;
    border: #cecece 1px solid;
    border-radius: 5px;
}

.search-result a {
    text-decoration: none;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 3px 0;
    border-bottom: #f1f1f1 1px solid;
}

.search-result a:hover {
    background: #f5f5f5;
}

.search-result a .item-name {
    color: #212121;
    margin: 0;
    margin-bottom: 6px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-weight: bold;
}

.search-result .item-details {
    width: 80%;
    padding: 3px;
    padding-top: 4px;
}

.search-result a .item-des {
    color: #212121;
    margin: 0;
    max-lines: 1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.search-result a .item-img {
    width: 20%;
    height: 45px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}

.search-result ul {
    padding: 0;
    margin: 0;
    list-style: none;
    max-height: 210px;
    overflow-y: auto;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Best Sellers</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Select Product</label>
                    <div class="search-nav">
                        <input type="text" class="form-control top-nav-search">
                        <div class="search-result">
                            <ul class="search_results_ul">
                            
                            </ul>
                        </div>
                    </div>

                </div>
                <form method="post" action="{{route('add_best_seller')}}">
                    @csrf
                    <input type="hidden" id="product_id" name="product_id" value="">
                    <button type="submit" style="margin-left: 45%; margin-bottom: 20px;" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Code</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($best_sellers as $product)
                            <tr>
                                <td>{{$product->product->name}}</td>
                                <td>{{$product->product->code}}</td>
                                <td><img width="70" src="/img/products/{{$product->product->image}}" ></td>
                                <td>
                                    <form method="POST" action="{{route('remove_best_seller',$product->id)}}" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="submit" class="btn btn-danger">Remove</button>
                                    
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                   
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
    <script>
        $(document).ready(function () {
            function load_data(query) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "/search/" + query,
                    method: "POST",
                    data: {
                        query: query
                    },
                    success: function (data) {
                        if (!$.isArray(data) || !data.length) {
                            item = "<li><a>No Results Found</a></li>";
                        } else {
                            var item = "";
                            $(data).each(function (i, f) {
                                item += '<li><a class="item_link" id="'+f.id+'" href="#">' +
                                    '<div style="background-image: url(\'/imgs/products/' +
                                    f.image + '\')" class="item-img"></div>' +
                                    '<div class="item-details">' +
                                    '<p class="item-name">' + f.code + '</p>' +
                                    '<p class="item-des">' + f.name + '</p>' +
                                    '</div></a></li>';
                            });
                        }
                        $(".search_results_ul").html(item);
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            }
            $('.top-nav-search').keyup(function () {
                var search = $(this).val();
                var searchDrop = $(".search-result");
                if (search != '') {
                    searchDrop.show();
                    load_data(search);
                } else {
                    searchDrop.hide();
                }
            });

            
        });
        $(document).on("click", '.item_link', function() {
            var txt = $(this).children().children('.item-des').text();
            $('.top-nav-search').val(txt);
            $('#product_id').val($(this).attr('id'));
            $(".search-result").hide();
        });

    </script>
@endpush
@endsection