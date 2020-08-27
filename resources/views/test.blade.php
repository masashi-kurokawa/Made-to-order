<!-- タイマー書く -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>タイトル &mdash; テスト受講</title>
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
	<!-- botan style  -->
	<link rel="stylesheet" href="css/botan.css">

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

			<h1 id="fh5co-logo"><a href="index.html">タイトル</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="{{ url('/home/') }}">Home</a></li>
					<li><a href="{{ url('/testlist/') }}">テスト一覧</a></li>
					<li><a href="{{ url('/surveylist/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li><a href="{{ url('/score/') }}">点数早見表</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>

	<div id="fh5co-main">
		<div class="">
			<h1 id="timer" class="hako box"></h1>
			<!-- <p id="timer" class="hako box"></p> -->
		</div>
		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">テスト1</h2>

				<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
					<div class="row">
						<div class="col-md-4">
							<h4>問題1</h4>
							<p>問題テキスト</p>
						</div>
					</div>
					<div class="row">
					<form action="#">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div>
								    <div class="radio">
								      <input id="1" type="radio" name="radio">
								      <label for="1">A</label>
								    </div>
								    <div class="radio">
								      <input id="2" type="radio" name="radio">
								      <label for="2">B</label>
								    </div>
										<div class="radio">
								      <input id="3" type="radio" name="radio">
								      <label for="3">C</label>
								    </div>
										<div class="radio">
								      <input id="4" type="radio" name="radio">
								      <label for="4">D</label>
								    </div>
									</div>
								</div>
							</div>
						</div>
					</form>
					</div>
				</div>

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<div class="row">
					<div class="col-md-4">
						<h4>問題2</h4>
						<p>問題テキスト</p>
					</div>
				</div>
				<form action="">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="テキスト"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<div class="row">
					<div class="col-md-4">
						<h4>問題3</h4>
						<p>問題テキスト</p>
					</div>
				</div>
				<form action="">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="テキスト"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<div class="row">
					<div class="col-md-4">
						<h4>問題4</h4>
						<p>問題テキスト</p>
					</div>
				</div>
				<form action="">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="テキスト"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>

			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				<div class="row">
					<div class="col-md-4">
						<h4>問題5</h4>
						<p>問題テキスト</p>
					</div>
				</div>
				<form action="">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="テキスト"></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				</form>
			</div>

			<div class="test-btn">
				<input type="submit" class="btn btn-primary btn-md" onclick="location.href='{{ url('/testend/') }}'" value="テスト終了">
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- タイマー機能の処理（jquery） -->
	<script>

	var to_timeup = 10;
			var max = 10;
			var intervalid;
			var start_flag = false;

			function count_start(){
					console.log("count_start");
				 if(start_flag===false){
					intervalid = setInterval(count_down,1000);
					start_flag = true;
				 }
			}

			function count_down(){
				console.log("count_down");
				var timer = document.getElementById("timer");
				if(to_timeup===0){
					// 次のページに行く様にするPHP使う
					// 下に行きたいページ遷移をかく
					// window.location.href = '{{ url('/home/') }}';
					timer.innerHTML = 'Time up!'
					timer.style.color="red";      　　　　　　　　
					count_stop();
				}   else {
					to_timeup--;
					padding();
				}
			}

			function padding(){
					var timer=document.getElementById("timer");
					var min = 0;
					var sec = 0;
					min = Math.floor(to_timeup/60);
					sec = (to_timeup%60);
					min = ("0"+min).slice(-2);
					sec = ("0"+sec).slice(-2);
					timer.innerHTML = min +":"+ sec;
			}

			window.onload = function(){
					padding();
					count_start();
			}

　</script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

<!-- <div class="col-md-6">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Phone">
	</div>
</div> -->
