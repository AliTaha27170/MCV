@extends('layouts.app')
@section('content')


<!-- <br><br><br><br>
<br><br><br>
<img src="/img/logo.png" class="banner-logo">
<br>
<div class="info-box-parent">
    <div class="info-box-title">
        <h1>Who We Are</h1>
    </div>

    <div class="info-body">
        <div class="container about-contact-parent">
            <div class="row">
                <div class="col-md-12">
                    <h3>About Us</h3>
                    <p>
                        TextEdit is a text editor that comes preinstalled on your Mac.
                        It allows everyone to be able to write documents,
                        similar to Pages or Microsoft Word.
                        It’s more of a basic application that people usually assume won't work for their needs.
                        In reality, TextEdit is a powerful tool if you need to write a document for work, school or
                        for fun.
                        You can find TextEdit in your Applications folder in Finder or in LaunchPad.
                        TextEdit is a text editor that comes preinstalled on your Mac.
                        It allows everyone to be able to write documents,
                        similar to Pages or Microsoft Word.
                    </p>
                </div>
                {{--
                <div class="col-md-5">
                    <h3>Contact Info</h3>
                    <ul class="a-c-contact">
                        <li><a href="#"><span class="fa fa-phone"></span>+1 656 6565 6565</a></li>
                        <li><a href="#"><span class="fa fa-envelope-o"></span>mail@mail.com</a></li>
                        <li><a href="#"><span class="fa fa-map-marker"></span>Location, Country, St 566</a></li>
                    </ul>
                </div>
                --}}
            </div>
        </div>

    </div>

</div> -->
<link rel="stylesheet" href="{{URL::asset('css/about.css')}}">
<section class="section_all bg-light" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section_title_all text-center">
                            <h3 class="font-weight-bold">Welcome To <img src="{{URL::asset('/img/logo.png')}}"> </h3>
                        </div>
                    </div>
                </div>

                <div class="row vertical_content_manage mt-5">
                    <div class="col-lg-12">
                        <div class="about_header_main mt-3">
                            <div class="about_icon_box">
                            </div>
                            <p class="About-Text text-muted mt-3">TextEdit is a text editor that comes preinstalled on your Mac. It allows everyone to be able to write documents, similar to Pages or Microsoft Word. It’s more of a basic application that people usually assume won't work for their needs. In reality, TextEdit is a powerful tool if you need to write a document for work, school or for fun. You can find TextEdit in your Applications folder in Finder or in LaunchPad. TextEdit is a text editor that comes preinstalled on your Mac. It allows everyone to be able to write documents, similar to Pages or Microsoft Word.<br> <br> <span style="color : #0273bd ; font-weight : 500">We know you have a choice. <br> Thank You for Choosing to Shop with us. <br> We Appreciate your Business. </span> </p>
                        </div>
                    </div>
            </div>
        </section>


@endsection