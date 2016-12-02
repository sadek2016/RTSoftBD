@include('user_layouts.header')
@include('user_layouts.sitebar')

<section id="feature">
<div class="container">
<div class="center wow fadeInDown">
<h2>Features</h2>
<p class="lead" >{{$siteDescription->feature}}</p>
</div>
<div class="row">
<div class="features">
@foreach($featureAllData as $featureData )
<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="feature-wrap">
<i class="fa {{$featureData->feature_icon}}"></i>
<h2>{{$featureData->feature_title}}</h2>
<h3>{{$featureData->feature_slogan}}</h3>
</div>
</div> 
@endforeach

 



</div> 
</div> 
</div> 
</section> 
<section id="recent-works">
<div class="container">
<div class="center wow fadeInDown">
<h2>Recent Works</h2>
<p class="lead">{{$siteDescription->work}}</p>
</div>
<div class="row">





@foreach($reacentWork as $recent)
<div class="col-xs-12 col-sm-4 col-md-3">
<div class="recent-work-wrap">
<img class="img-responsive" src='{{ asset("$recent->bgImage")}}' alt="">
<div class="overlay">
<div class="recent-work-inner">
<h3><a href="#">{{$recent->workTitle}}</a> </h3>
<p>{{$recent->workDescription}}</p>
<a class="preview" href='{{ asset("$recent->bgImage")}}' rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
</div>
</div>
</div>
</div>
@endforeach



</div> 
</div> 
</section> 
<section id="services" class="service-item">
<div class="container">
<div class="center wow fadeInDown">
<h2>Our Service</h2>
<p class="lead">{{$siteDescription->service}}</p>
</div>
<div class="row">
@foreach($serviceAllData as $serviceData)
<div class="col-sm-6 col-md-4">
<div class="media services-wrap wow fadeInDown">
<div class="pull-left">
<img class="img-responsive" src='{{ asset("$serviceData->icon")}}' height="70px" width="70px">
</div>
<div class="media-body">
<h3 class="media-heading">{{$serviceData->title}}</h3>
<p>{{$serviceData->slogan}}</p>
</div>
</div>
</div>
@endforeach







</div> 
</div> 
</section> 
<section id="middle">
<div class="container">
<div class="row">
<div class="col-sm-6 wow fadeInDown">
<div class="skill">
<h2>Our Skills</h2>
<p>{{$siteDescription->skill}}</p>

@foreach($skillAllData as $skillData)
<div class="progress-wrap">
<h3>{{$skillData->category}}</h3>
<div class="progress">
<div class="progress-bar  {{$skillData->color}}" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: {{$skillData->pertancag}}%">
<span class="bar-width">{{$skillData->pertancag}}%</span>
</div>
</div>
</div>
@endforeach





</div>
</div> 
<div class="col-sm-6 wow fadeInDown">
<div class="accordion">
<h2>Why People like us?</h2>
<div class="panel-group" id="accordion1">




@foreach($likeAllData as $likeData)
<div class="panel panel-default">
<div class="panel-heading ">
<h3 class="panel-title">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
Lorem ipsum dolor sit amet
<i class="fa fa-angle-right pull-right"></i>
</a>
</h3>
</div>
<div id="collapseThree1" class="panel-collapse collapse">
<div class="panel-body">
Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
</div>
</div>
</div>
@endforeach



</div> 
</div>
</div>
</div> 
</div> 
</section> 






@include('user_layouts.footer')