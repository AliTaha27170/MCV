@extends('layouts.app')
@section('content')
<br><br><br>
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>All Categories</h1>
    </div>

    <div class="info-body cat-list">
        
        <div class="row">
            @foreach($categories as $category)

            <div class="col-md-4">
                <a href="/categories/{{$category->id}}">
                    <div class="cat-card" style="background-image: url('/img/{{$category->cover}}')">
                        <h2>{{$category->name}} <span class="fa fa-angle-right"></span></h2>
                    </div>
                </a>
            </div>

            @endforeach

        </div>

    </div>

</div>
@endsection