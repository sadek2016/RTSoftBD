

<section id="bottom">
<div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Company</h3>
<ul>
@foreach($companyLinkData as $companyLink)
<li><a href="http://{{$companyLink->link}}" target="_blank" >{{$companyLink->name}}</a></li>
@endforeach
</ul>
</div>
</div> 
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Support</h3>
<ul>
@foreach($supportLinkData as $supportLink)
<li><a href="http://{{$supportLink->link}}" target="_blank">{{$supportLink->name}}</a></li>
@endforeach
</ul>
</div>
</div> 
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Developers</h3>
<ul>
@foreach($developerLinkData as $developerLink)
<li><a href="http://{{$developerLink->link}}" target="_blank">{{$developerLink->name}}</a></li>
@endforeach
</ul>
</div>
</div> 
<div class="col-md-3 col-sm-6">
<div class="widget">
<h3>Our Partners</h3>
<ul>
@foreach($partnerLinkData as $partnerLink)
<li><a href="http://{{$partnerLink->link}}" target="_blank">{{$partnerLink->name}}</a></li>
@endforeach
</ul>
</div>
</div> 
</div>
</div>
</section> 
<footer id="footer" class="midnight-blue">
<div class="container">
<div class="row">
<div class="col-sm-6">
&copy; {{$copyrightData->copyright}} <a target="_blank" href="http://www.{{$copyrightData->link}}.com" title="Free Twitter Bootstrap WordPress Themes and HTML templates">{{$copyrightData->link}}</a>. {{$copyrightData->others}}.
</div>
<div class="col-sm-6">
<ul class="pull-right">
<li><a href="/">Home</a></li>
<li><a href="/about-us">About Us</a></li>
<li><a href="/portfolio">Portfolio</a></li>
<li><a href="/contact-us">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</footer> 
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('js/wow.min.js')}}"></script>
</body>

<!-- Mirrored from shapebootstrap.net/demo/html/corlate/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Nov 2016 11:41:43 GMT -->
</html>