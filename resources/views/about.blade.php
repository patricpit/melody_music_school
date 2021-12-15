@extends('layouts.mobile')

@section('content')

<div class="w3-content w3-section" style="max-width:1200px">
  <img class="mySlides w3-animate-fading" src="img/p1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="img/p3.jpg" style="width:100%">
  
</div>
<p class="text-l text-gray_700 pt-6 pb-8 leading-8 font-light">St. Dominics Orchestra is situated in Lagos Nigeria, at St. Dominics catholic church Yaba Lagos...
For bookings and sponsorship:
Email: stdominicsorchestra@gmail.com
Call: 08064263154 or 08173969776
</p>





<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

@endsection