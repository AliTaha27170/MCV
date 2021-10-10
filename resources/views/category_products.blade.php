@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/categoryPreview.css">
<br><br><br>
{{--
<div class="info-header">
        <div class="row">
            <div class="col-md-4">
                <div class="cat-cover" style="background-image: url('/img/covers/{{$category->cover}}')"></div>
            </div>
            <div class="col-md-8">

                <h1>{{$category->name}}</h1>
                <br>
                <p>
                    {{$category->description}}
                </p>
                <br>

                <div class="btn-parent">
                    <a class="btn1" href="#">
                        <img src="/img/capsule.svg" alt="">
                        <div>
                            <p>View Products</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
</div>
--}}

<img style="width: 100%" src="/img/covers2/{{$category->cover}}">

<br><br><br><br>

<div class="info-box-parent">
    <div class="info-box-title">
        <h1>{{$category->name}} Products</h1>
    </div>

    <div class="info-body">
            <div style="width:100%;">
                <div class="cards-table">
                    @foreach($products as $product)
                    @if($product->category_id!=8 && $product->category_id!=9)
                    @if($product->product_detail!=null)
                    @if($product->product_detail->serving_per_container==120)
                        <!--
                        ///////////////////////////////////////////////
                        if 120 ct -> add class "med-120"
                        if 60 ct -> add class "med-60"
                        ///////////////////////////////////////////////
                        -->
                        <div class="med-card med-120">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" class="" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->brand->name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                                </div>
                            </div>
                        </div>
                    @elseif($product->product_detail->serving_per_container==60)
                    <div class="med-card med-60">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" class="" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->brand->name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="med-card">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->brand->name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @else
                        <div class="med-card">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->brand->name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @else
                        <div class="med-card med-120">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->brand->name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
        
                </div>
                <br><br>
                <div style="text-align: center">
                    {{ $products->links() }}
                </div>

            </div>

    </div>

</div>
@endsection