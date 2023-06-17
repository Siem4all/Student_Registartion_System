@extends('layouts.user')
@section('content')
<!-- page content -->
          <!-- top tiles -->
          <div class="container row col-md-12" style="display: inline-block;" >
          <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="{{asset('images/snow.jpg')}}" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="{{asset('public/images/wide.jpg')}}" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="{{asset('public/images/snow.jpg')}}" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
        </div>
          <!-- /top tiles -->
        <!-- /page content -->
        @endsection