
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>タイトル &mdash; アンケート一覧</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FreeHTML5.co

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	-->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="{{ url('/home/') }}">タイトル</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="{{ url('/home/') }}">Home</a></li>
					<li><a href="{{ url('/testlist/') }}">テスト一覧</a></li>
					<li class="fh5co-active"><a href="{{ url('/surveylist/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li><a href="{{ url('/score/') }}">点数早見表</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>





		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">アンケート一覧</h2>
				<div class="row row-bottom-padded-md">
<<<<<<< HEAD


					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
					@foreach ($dblist as $key => $survey_list) <!-- ここの変数変える？ -->
						<div class="blog-entry">
							<a href="{{ url('/survey/') }}" class="blog-img"><img src="{{$survey_list->test_img}}" class="img-responsive" alt="#"></a>
=======
				@foreach ($dblist as $key => $survey_list)
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
					<div class="blog-entry">
							<a href="{{ url('/survey/') }}" class="blog-img"><img src= class="img-responsive" alt="#"></a>
>>>>>>> slackOauth
							<div class="desc">
								<h3><a href="{{ url('/survey/') }}">{{$survey_list->title}}</a></h3>
								<span><small> 2020 </small> / <small> 7 </small> / <small> 30 </small></span>
								<p>ここにテキストを入れることができます。</p>
								<div class="more-center">
									<a href="{{ url('/survey/') }}" class="lead more">アンケート受講</a>
									<a href="{{ url('/surveyedit/') }}" class="lead more">詳細・編集</a>
								</div>
							</div>
						</div>
					</div>
<<<<<<< HEAD


=======
				@endforeach
>>>>>>> slackOauth
				</div>
			</div>

		</div>
	</div>



	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>
