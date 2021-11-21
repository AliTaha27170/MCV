@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/brandPreview.css">
<br><br><br>
<div class="info-box-parent" >
    <div class="info-body pro-head">
        <div class="row">
            <div class="col-md-5">
                <img src="/img/{{$brand->image}}" alt="">
            </div>
            <div class="col-md-7">

                <h1>{{$brand->name}}</h1>
                <br>
                <p>
                    {{$brand->description}}
                </p>
                <br>

                <div class="btn-parent" >
                    <a class="btn1" href="#" id="show-btn">
                        <img src="/img/capsule.svg" alt="">
                        <div>
                            <p>View {{$brand->name}} Products</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>



<div class="info-box-parent" id="show-pr">
    <div class="info-box-title">
        <h1>{{$brand->name}} Products</h1>
    </div>

    <div class="info-body">
            <div style="display:inline-block;width:100%;">
                <div class="cards-table">
                    @foreach($products as $product)
                    @if($product->product_detail!=null)
                    @if($product->product_detail->serving_per_container==120)
                    <!-- <div class="med-card med-120">
                        <div class="img-parent">
                            <img src="/img/products/{{$product->image}}" alt="">
                        </div>
                        <div class="card-info-parent">
                            <h3>{{$product->category->name}}</h3>
                            <h1>{{$product->name}}</h1>
                            <div class="btn-parent">
                                <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- New Card -->
                    <div class="card card-item">
                        <img src="/img/products/{{$product->image}}" alt="" />
                        <div class="card-body">
                        <div class="row">
                            <div class="card-title">
                            <h4>{{$product->brand->name}}</h4>
                            </div>
                        </div>
                        <hr/>
                        <p>
                        {{$product->name}}.
                        </p>
                        <div class="btn-group">
                            <div class="btn">
                            <a href="/products/{{$product->id}}">Preview Product</a>
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- New Card -->
                    @elseif($product->product_detail->serving_per_container==60)
                    <!-- <div class="med-card med-60">
                        <div class="img-parent">
                            <img src="/img/products/{{$product->image}}" alt="">
                        </div>
                        <div class="card-info-parent">
                            <h3>{{$product->category->name}}</h3>
                            <h1>{{$product->name}}</h1>
                            <div class="btn-parent">
                                <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- New Card -->
                    <div class="card card-item">
                        <img src="/img/products/{{$product->image}}" alt="" />
                        <div class="card-body">
                        <div class="row">
                            <div class="card-title">
                            <h4>{{$product->brand->name}}</h4>
                            </div>
                        </div>
                        <hr/>
                        <p>
                        {{$product->name}}.
                        </p>
                        <div class="btn-group">
                            <div class="btn">
                            <a href="/products/{{$product->id}}">Preview Product</a>
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- New Card -->
                    @else
                    <!-- <div class="med-card">
                        <div class="img-parent">
                            <img src="/img/products/{{$product->image}}" alt="">
                        </div>
                        <div class="card-info-parent">
                            <h3>{{$product->category->name}}</h3>
                            <h1>{{$product->name}}</h1>
                            <div class="btn-parent">
                                <a href="/products/{{$product->id}}" class="btn1">Preview Product</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- New Card -->
                    <div class="card card-item">
                        <img src="/img/products/{{$product->image}}" alt="" />
                        <div class="card-body">
                        <div class="row">
                            <div class="card-title">
                            <h4>{{$product->brand->name}}</h4>
                            </div>
                        </div>
                        <hr/>
                        <p>
                        {{$product->name}}.
                        </p>
                        <div class="btn-group">
                            <div class="btn">
                            <a href="/products/{{$product->id}}">Preview Product</a>
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- New Card -->
                    @endif
                    @else
                        <!-- <div class="med-card">
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
                        </div> -->
                        <!-- New Card -->
                        <div class="card card-item">
                        <img src="/img/products/{{$product->image}}" alt="" />
                        <div class="card-body">
                        <div class="row">
                            <div class="card-title">
                            <h4>{{$product->brand->name}}</h4>
                            </div>
                        </div>
                        <hr/>
                        <p>
                        {{$product->name}}.
                        </p>
                        <div class="btn-group">
                            <div class="btn">
                            <a href="/products/{{$product->id}}">Preview Product</a>
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- New Card -->
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
<script>
$("#show-btn").click(function() {
    //alert("J");
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#show-pr").offset().top - 50
    }, 2000);
});
</script>
@endsection