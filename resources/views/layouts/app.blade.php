<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>MCV pharma</title>
    <link rel="stylesheet" href="/libs/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="/libs/bootstrap-4.3.1-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/libs/slick/slick.css">
    <link rel="stylesheet" href="/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="/libs/sider/css/sidebar.min.css">
    <link rel="stylesheet" href="{{URL::asset('libs/aos/css/aos.css')}}">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/new-css-file.css">
    {{-- <link rel="icon" href="{{URL::asset('/img/logo.png')}}"> --}}
    <script src="/libs/jquery-3.4.1.min.js"></script>
    <script src="/libs/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <script src="/libs/slick/slick.min.js"></script>
    <script src="/libs/sider/js/sidebar.js"></script>
</head>
<body>
<button id="scroll_top"><i class="fa fa-arrow-up"></i></button>
    <nav class="nav-parent nav-second">
        <div class="top-nav">
            <button id="open-left" class="fa fa-bars nav-btn"></button>
            <a href="/" class="a-media"><img class="logo-nav" src="/img/logo.png" alt=""></a>
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="#">Product <span class="fa fa-angle-down"></span></a>
                    <ul class="nav-drop">
                            @foreach($categories as $category)
                            <li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                    </ul>
                </li>
                <li><a href="#">Our Brands <span class="fa fa-angle-down"></a>
                    <ul class="nav-drop">
                        @foreach($brands as $brand)
                        <li><a href="/brands/{{$brand->id}}">{{$brand->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/aboutUs">About us</a></li>
                <li><a href="/contactUs">Contact us</a></li>
                <li><a href="/productsList">Products List</a></li>
                <li class="second-search"><a><span class="fa fa-search"></span></a></li>
            </ul>
        </div>
        <div class="bottom-nav">
            <div class="search-nav">
                <form method="post" action="{{route('search')}}">
                    @csrf
                    <input type="text" name="search" id="" placeholder="search for anything">
                    <button type="submit"><span class="fa fa-search"></span></button>
                </form>
            </div>

        </div>
    </nav>

    <script>
        $('.nav-second .bottom-nav').slideUp();
        $('.second-search').click(function(){
            $('.nav-second .bottom-nav').slideToggle()
        });
    </script>



    <div class="sidebar" id="sidebar">
        <div class="close">
            <a href="#" style="text-align: right;" id="sidebar-close">&times;</a>
        </div>
        <div class="content">
            <a class="sidebar-brand" href="/">
                <img src="/img/logo.png" width="70" alt="">
            </a>
            <hr>
            <ul class="s-menu">
                <li><a href="/">HOME</a></li>
                <li>
                    <a>Product <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                       @foreach($categories as $category)
                            <li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                    </ul>
                </li>

                <li>
                    <a>Our Brands <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu">
                        @foreach($brands as $brand)
                        <li><a href="/brands/{{$brand->id}}">{{$brand->name}}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="/aboutUs">About us</a></li>
                <li><a href="/contactUs">Contact us</a></li>

                <ul class="a-c-contact" style="margin-top: 30px;">
                    <li><a href="#"><span class="fa fa-envelope-o"></span>mail@mail.com</a></li>
                    <li><a href="#"><span class="fa fa-map-marker"></span>Location, Country, St 566</a></li>
                </ul>
            </ul>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="footer-parent">
    
            <div class="container">
                <div class="row footer-row">
                    <div class="col-md-4">
                        <div class="footer-img">
    
                            <img src="/img/logo.png" alt="">
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <h4>Site Map:</h4>
                        <ul>
                            <li>
                                <a href="/categoryList">
                                    Our Products
                                </a>
                            </li>
                            <li>
                                <a href="/brands/1">
                                    VCLX Brand
                                </a>
                            </li>
                            
                            <li>
                                <a href="/brands/2">
                                    Hopkinsvita Brand
                                </a>
                            </li>
                            <li><a href="/aboutUs">About Us</a></li>
                            <li><a href="/contactUs">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 contact-footer">
                        <h4>Contact US:</h4>

       
                        
                        <ul class="a-c-contact">
                            <li><a href="#"><span class="fa fa-phone"></span>    (301) 327-7339
                            </a><a href="#"><span class="fa fa-envelope-o"></span>info@mcvpharma.com</a></li>
                            <li><a href="#"><span class="fa fa-map-marker"></span>7184 TROY HILL DRIVE<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELKRIDGE, MD 21075 ,USA</a></li>
                        </ul>
                    </div>
    
                </div>
            </div>
        </div>
        <div class="footer-copy">MCV Pharma- All Rights Reserved ©<script>document.write(new Date().getFullYear())</script></div>
    </footer>
    <script>
        $(".s-menu a").click(function () {
            $(this).next().filter("ul").slideToggle(500);
        });
    </script>
    @stack('page_scripts')
    <script src="{{URL::asset('libs/aos/js/aos.js')}}"></script>
    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/scrolltotop.js') }}"></script>
    <script src="{{ asset('js/new-js-file.js') }}"></script>
</body>
    
</html>

    