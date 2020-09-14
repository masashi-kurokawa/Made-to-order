<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>タイトル &mdash; アンケート新規作成</title>
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
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- score style  -->
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">

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
					<li><a href="{{ url('/survey/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li><a href="{{ url('/score/') }}">点数早見表</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>

		<div id="fh5co-main" class="animate-box" data-animate-effect="fadeInLeft">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading">アンケート新規作成</h2>

        <div id="count" class="container animate-box" data-animate-effect="fadeInLeft">
					<form action="{{ route('survey.store')}}" method="POST">
						@csrf
            <div class="title-rap">
              <input type="text" name="title" placeholder="アンケートタイトルを入力してください。">
							<input type="text" name="status" placeholder="使用:1　未使用:2">
              <!-- <textarea name="text" rows="2" placeholder="ここにテキストを入れることができます。"></textarea> -->
            </div>
            <table>
              <tbody>
              <!-- ここに問題が追加されていきます。 -->
							<!-- <tr>
								<td><textarea name="question" rows="5" cols="50" placeholder="ここに質問を入力してください。"></textarea></td>
								<td class="remove-center"><button class="remove">-</button></td>
							</tr> -->
              </tbody>
            </table>
            <input type="submit" value="保存">
          </form>

          <p id="output">0</p>

          <button id="addChoice2" class="plus">+ 2択問題追加</button>
          <button id="addText" class="plus">+ アンケート追加</button>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>
        $(function(){
            // 並び替え機能
            $('tbody').sortable();

            // 2択問題追加
        		//追加ボタンがクリックされたら、function(){…}の処理を実行する
        		$('#addChoice2').click(function(){
                var html = '<tr><td><textarea name="text" rows="5" cols="50" placeholder="ここに質問を入力してください。"></textarea></td><td><form><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"></form></td><td class="remove-center"><button class="remove">-</button></td></tr>';
        				//append()を使ってtbody内の一番最後にhtmlを追加する
        				$('tbody').append(html);
            });

            // アンケート追加
        		//追加ボタンがクリックされたら、function(){…}の処理を実行する
        		$('#addText').click(function(){
                var html = '<tr><td><textarea name="question" rows="5" cols="50" placeholder="ここに質問を入力してください。"></textarea></td><td class="remove-center"><button class="remove">-</button></td></tr>';
								//append()を使ってtbody内の一番最後にhtmlを追加する
        				$('tbody').append(html);
            });

        		// 削除処理
        		//削除ボタンがクリックされたら、function(){…}の処理を実行する
        		$(document).on('click', '.remove', function() {
        				//クリックされた.removeの親要素trをremove（削除）する
                $(this).parents('tr').remove();
            });

        });
        </script>

				<!-- 問題数カウント処理 -->
        <script>
				$(function(){
					var i = 0;
					if( 0 <= i && i <= 10 ){
						// 問題を追加するたび数字をプラスする
						$(document).on('click', '.plus', function() {
							i++;
							$('#output').html(i);
			      });
						// 問題を削除するたび数字をマイナスする
			      $(document).on('click', '.remove', function() {
							i--;
			      	$('#output').html(i);
			      });
					} else {
						// 問題追加ボタンを非活性にする
						$(".plus").prop("disabled", true);
					}
				});
        </script>

				<a href="{{ route('survey.index')}}" class="more icon-arrow-left3"> 戻る</a>
			</div>
		</div>
		</div>

	<!-- jQuery -->
	<!-- <script src="js/jquery.min.js"></script> -->
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
