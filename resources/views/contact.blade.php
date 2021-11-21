@extends('layouts.app')
@section('content')
<!-- 
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

</div> -->
<link rel="stylesheet" href="{{URL::asset('css/contact-us.css')}}">
 <div class="Contact-container" id="main_contact_section">
  <div class="content">
    <div class="left-side">
      <div class="address details">
        <i class="fa fa-map-marker"></i>
        <div class="topic">Address</div>
        <div class="text-one">7184 Troy Hill Drive SUIT C Elkridge MD 21075 USA</div>
      </div>
      <div class="phone details">
        <i class="fa fa-phone"></i>
        <div class="topic">Phone</div>
        <div class="text-one">	(301) 327-7339 </div>
      </div>
      <div class="email details">
        <i class="fa fa-envelope"></i>
        <div class="topic">Email</div>
        <div class="text-one">info@mcvpharma.com</div>
      </div>
    </div>
    <div class="right-side">
      <div class="topic-text">Send us a message</div>
      <p>If you have any Question , you can send us message from here.<br> It's our pleasure to help you.</p>
      <form action="#" method="POST">
         <div class="input-box">
          <input type="text" placeholder="Enter Your name" name="mail">
        </div> 
        <div class="input-box">
          <input type="Email" placeholder="Enter Your Email" name="mail">
        </div>
        <div class="input-box message-box">
           <textarea name="message" value="message" id="message" class="form-control" rows="3" placeholder="Your Message" required></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
      </form>
    </div>
  </div>
</div>
<!-- map -->
<div class="Contact-container"style="padding: 020px;">
<div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4436.563288335262!2d-76.74920380408464!3d39.19409239099808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7e1913f4b4fdb%3A0x18a1a674d9c0d7ad!2s7184%20Troy%20Hill%20Dr%2C%20Elkridge%2C%20MD%2021075%2C%20USA!5e0!3m2!1sen!2sro!4v1573996589257!5m2!1sen!2sro" frameborder="0" style="border:0; width:100%" allowfullscreen=""></iframe>
                    </div>
</div>
<!-- map -->



@endsection