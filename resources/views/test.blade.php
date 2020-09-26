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
					<li><a href="{{ url('/survey/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li><a href="{{ url('/score/') }}">点数早見表</a></li>
					<li><a href="{{ url('/grade/') }}">未採点</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>

	<div id="fh5co-main">
		<div class="timerbox">
			<h1 id="timer" class="hako box"></h1>
		</div>
		<div class="fh5co-narrow-content">
			<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">テストタイトル</h2>


			　　<!-- 問題表示 -->
			<form class="form-inline" id="answer" action="{{ url('/test') }}" method="GET">
			<!-- <form class="form-inline" id="answer" action="{{ url('/testend/') }}" method="GET"> -->
					@foreach ($sorteds as $key => $tests)
					  <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
					    <div class="row">
					      <div class="col-md-4">
									<h4>問題{{$tests->question_number}}</h4>
									<p><p>{{$tests->question}}</p></p>
					      </div>
					    </div>
					    <div class="row">　<!-- ここからテスト問題の回答 -->
								<!-- if文で選択、穴埋め、記述を切り分ける -->

								<!-- テスト回答送信機能 -->
								<!-- actionに問題の番号つけて送信した時に区別する -->
								@if ($tests->role === 1)　<!-- テストの回答方式で判別 -->
								 <div class="form-group">
								   <label for="content">回答記入欄</label>
								   <input type="hidden" class="form-control" name="question{{$tests->question_number}}" value="{{$tests->role}}">

								   <input type="text" class="form-control" name="answer{{$tests->question_number}}" value="">
								 </div>

								 @elseif ($tests->role === 2)
								 <div class="form-group">
								   <label for="content">回答記入欄</label>
								   <input type="hidden" class="form-control" name="question{{$tests->question_number}}" value="{{$tests->role}}">

								   <input type="text" class="form-control" name="answer{{$tests->question_number}}" value="">
								 </div>

								 @elseif ($tests->role === 3)
								 <div class="form-group">
								   <label for="content">回答記入欄</label>
								   <input type="hidden" class="form-control" name="question{{$tests->question_number}}" value="{{$tests->role}}">

								   <input type="text" class="form-control" name="answer{{$tests->question_number}}" value="">
								 </div>

								 @endif


					    </div>
					  </div>
					@endforeach



			<div class="test-btn">
				<input type="submit" onclick="return confirm('テストを終了してもよろしいですか？')" name="answers" form="answer" class="btn btn-primary btn-md"
				onclick="location.href='{{ url('/testend/') }}'" value="テスト終了">
			</div>
		　</form>

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

	var to_timeup = 10; //講師の設定した時間をテーブルから持ってくる
			// var max = 10; //いらないかも
			var intervalid;
			var start_flag = false;

			function count_start(){
					console.log("count_start");
				 if(start_flag===false){
					intervalid = setInterval(count_down,1000);
					start_flag = true;
				 }
			}

			function count_stop(){
                console.log(count_stop);
                clearInterval(intervalid);
                start_flag = false;
      }

			function count_down(){
				console.log("count_down");
				var timer = document.getElementById("timer");
				if(to_timeup===0){
					count_stop();
					// 次のページに行く様にするPHP使う
					// 下に行きたいページ遷移をかく（if文で完了か次のページに移す）
					window.location.href = '{{ url('/testend/') }}';
					timer.innerHTML = 'Time up!'
					timer.style.color="white";
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
