<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>タイトル &mdash; 生徒詳細</title>
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
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
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
					<li><a href="{{ url('/survey/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li><a href="{{ url('/score/') }}">点数早見表</a></li>
					<li><a href="{{ url('/grade/') }}">未採点</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<div class="logout-space">
					<a href="{{ route('logout') }}" class="logout-btn">ログアウト</a>
				</div>
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">受講履歴</h2>

				<!-- <div class="test-btn animate-box" data-animate-effect="fadeInLeft">
					<input type="submit" class="btn btn-primary btn-md" onclick="location.href=location.href+'&mode=test'" value="テストのみ">
					<input type="submit" class="btn btn-primary btn-md" onclick="location.href=location.href+'&mode=survey'" value="アンケートのみ">
				</div> -->

				<div class="row row-bottom-padded-md">

					<!-- ※テストの一覧から持ってきた DB出来次第動くと思う-->
					<!-- テスト 講師のみ表示させる -->
					@foreach ($users_db as $key => $test)
						<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src="img-responsive" alt="#"></a>
								<div class="desc">
									<h3><a href="#">{{$test->title}}</a></h3>
									<span><small>{{$test->updated_at->format('Y-m-d')}} </small></span>
									<!-- <p>ここにテキストを入れることができます。</p> -->
									<a href="{{ url('testshow', $test->id)}}" class="lead more">回答確認</a>
								</div>
							</div>
						</div>
					@endforeach

						<!-- アンケート 営業のみ表示させる -->
						@foreach ($surveys_db as $survey)
						<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="#" class="blog-img"><img src= class="img-responsive" alt="#"></a>
								<div class="desc">
									<h3><a href="#">{{ $survey->title }}</a></h3>
									<span>{{ $survey->updated_at->format('Y-m-d') }}</span>
									<!-- <p>ここにテキストを入れることができます。</p> -->
									<div class="more-center">
										<!-- <a href="{{ url('/take_survey/') }}" class="lead more">アンケート受講</a> -->
										<a href="{{ route('survey.show', $survey->id)}}" class="lead more">回答確認</a>
										<!-- <form action="{{ route('survey.destroy', $survey->id)}}" method="POST">
											@csrf
											@method('DELETE')
											<input class="lead more" type="submit" name="" value="削 除">
										</form> -->
									</div>
								</div>
							</div>
						</div>
						@endforeach

				</div>
				<a href="{{ url('/student/') }}" class="more icon-arrow-left3"> 戻る</a>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="../js/jquery.flexslider-min.js"></script>


	<!-- MAIN JS -->
	<script src="../js/main.js"></script>

	</body>
</html>
