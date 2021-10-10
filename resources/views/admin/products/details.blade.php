@extends('admin.layouts.master')
@section('content')
<style>
.form-control { width:90%;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Product Details</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                
                    <!-- form start -->
                    @if($product->has_details==0)
                    <form role="form" method="post" action="{{route('Product_details.store')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serving Size</label>
                                        <input type="text" name="serving_size" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serving Per Container</label>
                                        <input type="text" name="serving_per_container" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Other Ingredients</label>
                                        <textarea name="other_ingredients" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Notes</label>
                                        <textarea name="notes" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shelf Life</label>
                                        <input type="text" name="shelf_life" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">How to Work</label>
                                        <textarea name="how_to_take" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Warnings</label>
                                        <textarea name="warnings" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @else
                    <form role="form" method="post" action="{{route('Product_details.update',$details->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serving Size</label>
                                        <input type="text" value="{{$details->serving_size}}" name="serving_size" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Serving Per Container</label>
                                        <input type="text" value="{{$details->serving_per_container}}" name="serving_per_container" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Other Ingredients</label>
                                        <textarea name="other_ingredients" class="form-control">{{$details->other_ingredients}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Notes</label>
                                        <textarea name="notes" class="form-control">{{$details->notes}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shelf Life</label>
                                        <input type="text" name="shelf_life" value="{{$details->shelf_life}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">How to Work</label>
                                        <textarea name="how_to_take" class="form-control">{{$details->how_to_take}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Warnings</label>
                                        <textarea name="warnings" class="form-control">{{$details->warnings}}</textarea>
                                    </div>
                                </div>
                            </div>
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endif
      
            </div>
              
        </div>
        <!-- /.row -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection