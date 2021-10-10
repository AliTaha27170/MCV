@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/brandPreview.css">
<br><br><br>
<br><br><br>

<div class="info-box-parent" id="show-pr">
    <div class="info-body search-page">
        <h2>Serach Results:</h2>
<br>
        <p>({{$search->count()}}) Items Founded</p>
        <br>
        <hr>
        <br>
            <div style="display:inline-block;width:100%;">
                <div class="cards-table">
                    @foreach($search as $product)
                        
                        <div class="med-card">
                            <div class="img-parent">
                                <img src="/img/products/{{$product->image}}" alt="">
                            </div>
                            <div class="card-info-parent">
                                <h3>{{$product->cat_name}}</h3>
                                <h1>{{$product->name}}</h1>
                                <div class="btn-parent">
                                    <a href="/products/{{$product->id}}" class="btn1" >Preview Product</a>
                                </div>
                            </div>
                        </div>
        
                    @endforeach
        
                </div>
                <br><br>
                <div style="text-align: center">
                    
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