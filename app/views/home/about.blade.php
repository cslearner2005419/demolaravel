@extends('layouts.main')

@section('title')
	About
@stop

@section('content')
	<!-- start about -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					{{ HTML::image('images/services.jpg', 'about', array('class' => 'img-responsive')) }}			
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="media">
						<div class="media-heading-wrapper">
							<div class="media-object pull-left">
								<i class="fa fa-mobile"></i>
							</div>
							<h3 class="media-heading">BASICS</h3>
						</div>
						<div class="media-body">
							<p>Welcome to the Laravel documentation. These documents were designed to function both as a getting-started guide and as a feature reference. Even though you may jump into any section and start learning, we recommend reading the documentation in order as it allows us to progressively establish concepts that will be used in later documents.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
					<div class="media">
						<div class="media-heading-wrapper">
							<div class="media-object pull-left">
								<i class="fa fa-comment-o"></i>
							</div>
							<h3 class="media-heading">APPLICATION STRUCTURE</h3>
						</div>
						<div class="media-body">
							<p>Laravel's directory structure is designed to be familiar to users of other popular PHP frameworks. Web applications of any shape or size can easily be created using this structure similarly to the way that they would be created in other frameworks.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
					<div class="media">
						<div class="media-heading-wrapper">
							<div class="media-object pull-left">
								<i class="fa fa-html5"></i>
							</div>
							<h3 class="media-heading">HTML5 &AMP; CSS3</h3>
						</div>
						<div class="media-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et laoreet phasellus ut nisi id leo molestie. Adipiscing vitae vel quam proin eget mauris eget. Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end about -->
@stop