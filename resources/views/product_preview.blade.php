@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="/css/itemPreview.css">
<link rel="stylesheet" href="/libs/thdoanMagnify/css/magnify.css">
<script src="/libs/thdoanMagnify/js/jquery.magnify.js"></script>
 <script src="/libs/thdoanMagnify/js/jquery.magnify-mobile.js"></script> 

<br><br><br>


<div class="info-box-parent">
    <div class="info-body pro-head">
        <div class="row">
            <div class="col-md-5" style="text-align: center">
                <img src="/img/products/{{$product->image}}" class="zoom" data-magnify-src="/img/products/{{$product->big_image}}">
            </div>
            <div class="col-md-7">

                <span class="category-span">VCLX </span>
                <h1>{{$product->name}}</h1>
                <span class="code-span">Item code: #{{$product->code}}</span>
                <br><br>
                <p>
                    {{$product->description}}
                </p>
                <br>
                <h3>Order Now:</h3>
                <p class="order-text">If you want this proudct please call us through: <a href="#">(301) 327-7339</a>
                </p>

                <div class="btn-parent">
                    <a class="btn1" href="#">
                        <span class="fa fa-phone"></span>
                        <div>
                            <p>Call Us Now</p>
                            <p>(301) 327-7339</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>

<script>
$(document).ready(function() {
  $('.zoom').magnify();
});
</script>

<style>
    .magnify > .magnify-lens {
      width: 250px;
      height: 250px;
    }
</style>

@if(!$components->isEmpty() || $product->has_details==1)
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>Supplement Facts</h1>
    </div>
    <div class="info-body" style="display: block;">
        <div class="med-serving">
            @if($product->has_details==1)
            <div>
                <img src="/img/capsuleGreen.svg" alt="">
                <p><b> Serving Size:</b> {{$details->serving_size}}</p>
            </div>
            <div>
                <img src="/img/pills.svg" alt="">
                <p> <b> Servings per container:</b>{{$details->serving_per_container}}</p>
            </div>
            <div>
                <img src="/img/shieldGreen.svg" alt="">
                <p> <b> Shelf Life:</b>{{$details->shelf_life}}</p>
            </div>
            @endif
        </div>
        @if(!$components->isEmpty())
        <div>
            <table>
                <tr>
                    <th>Components</th>
                    <th>Amount</th>
                    <th>%Daily Value</th>
                </tr>
                @foreach($components as $component)
                    <tr>
                        <td>{{$component->component}}</td>
                        <td>{{$component->amount}}</td>
                        <td>{{$component->daily_value}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        @endif
    </div>

</div>
@if($product->has_details==1 && $details->other_ingredients!=null)
<div class="info-box-parent" style="margin-top: 85px">

    <div class="info-body  direc-parent">

        <div>

            <h3>Other Ingredients:</h3>
            <p>
                {{$details->other_ingredients}}
            </p>


        </div>

    </div>
</div>
@endif

@if($product->has_details==1)
@if($details->how_to_take!=null)
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>Directions</h1>
    </div>

    <div class="info-body">
        <div class=" direc-parent">
            <div class="row">
                <div class="col-md-5">

                    <img class="uu" src="/img/doctor.svg" alt="">
                </div>
                <div class="col-md-7">
                    <div>

                        <h3>How To Take:</h3>
                        <p>
                            {{$details->how_to_take}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endif
@if($details->warnings!=null)
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>Warnings</h1>
    </div>

    <div class="info-body">
        <div class="direc-parent">
            <div class="row">

                <div class="col-md-7">
                    <div>

                        <h3>Read Befor Using:</h3>
                        <p>
                            {{$details->warnings}}
                        </p>
                    </div>
                </div>
                <div class="col-md-5">

                    <img class="uu" src="/img/shield.svg" alt="">
                </div>
            </div>
        </div>

    </div>

</div>
@endif
@if($details->notes!=null)
<div class="info-box-parent" style="margin-top: 85px">

    <div class="info-body  direc-parent">

        <div>

            <h3>Note That:</h3>
            <p>
                {{$details->notes}}
            </p>


        </div>

    </div>
</div>
@endif

@endif
@endif

@endsection