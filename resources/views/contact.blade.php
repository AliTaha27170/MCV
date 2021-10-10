@extends('layouts.app')
@section('content')

<br><br><br><br>
<br><br><br>
<img src="/img/logo.png" class="banner-logo">
<br>
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>Contact Us</h1>
    </div>

    <div class="info-body">
        <div class="container contact-parent">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="/img/contact.svg" alt="">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="contact-info">

                        <input type="text" class="input1" placeholder="Your Email Address">
                        <br>
                        <input type="text" class="input1" placeholder="Message Subject">
                        <br>
                        <textarea class="input1" name="" id="" cols="30" rows="6"
                            placeholder=""></textarea>
                        <br>
                        <div class="btn-parent">
                            <button class="btn1">Read More</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

</div>


@endsection