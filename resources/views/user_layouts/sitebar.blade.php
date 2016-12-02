<section id="main-slider" class="no-margin">
<div class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#main-slider" data-slide-to="0" class="active"></li>
<li data-target="#main-slider" data-slide-to="1"></li>
<li data-target="#main-slider" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<?php $i=0;?>
@foreach($slitebarAllData as $slider)
<?php $i++?>
<?php if($i==1){ ?>
<div class="item active" style="background-image: url(images/slider/bg1.jpg)">
<?php }else{?>
<div class="item" style="background-image: url(images/slider/bg3.jpg)">
<?php }?>
<div class="container">
<div class="row slide-margin">
<div class="col-sm-6">
<div class="carousel-content">
<h1 class="animation animated-item-1">{{$slider->title}}</h1>
<h2 class="animation animated-item-2">{{$slider->slogan}}</h2>
<a class="btn-slide animation animated-item-3" href="#">Read More</a>
</div>
</div>
<div class="col-sm-6 hidden-xs animation animated-item-4">
<div class="slider-img">
<img src='{{ asset("$slider->font_image")}}' class="img-responsive">
</div>
</div>
</div>
</div>
</div>
@endforeach

 
</div> 
</div> 
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
<i class="fa fa-chevron-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
<i class="fa fa-chevron-right"></i>
</a>
</section> 