<!-- いったん点数早見表を作る為にデータベースに接続 -->
<?php

try {

    /* リクエストから得たスーパーグローバル変数をチェックするなどの処理 */

    // データベースに接続
    $pdo = new PDO(
        'mysql:dbname=Made_to_order;host=localhost;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    /* データベースから値を取ってきたり， データを挿入したりする処理 */

		// SELECT文を変数に格納
		$sql = "SELECT * FROM test";

		// SQLステートメントを実行し、結果を変数に格納
		$stmt = $pdo->query($sql);

		//レコード件数取得
  	$row_count = $stmt->rowCount();

  	while($row = $stmt->fetch()){
  		$rows[] = $row;
  	}

		// foreach文で配列の中身を一行ずつ出力
		foreach ($stmt as $row) {

		  // データベースのフィールド名で出力
		  echo $row['user_id'].'：'.$row['test_title'].'：'.$row['score'];

		  // 改行を入れる
		  echo '<br>';
		};

} catch (PDOException $e) {

    // エラーが発生した場合は「500 Internal Server Error」でテキストとして表示して終了する
    // - もし手抜きしたくない場合は普通にHTMLの表示を継続する
    // - ここではエラー内容を表示しているが， 実際の商用環境ではログファイルに記録して， Webブラウザには出さないほうが望ましい
    header('Content-Type: text/plain; charset=UTF-8', true, 500);
    exit($e->getMessage());

}

// Webブラウザにこれから表示するものがUTF-8で書かれたHTMLであることを伝える
// (これか <meta charset="utf-8"> の最低限どちらか1つがあればいい． 両方あっても良い．)
header('Content-Type: text/html; charset=utf-8');

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>タイトル &mdash; HOME</title>
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
	<!-- score style  -->
	<link rel="stylesheet" href="css/score.css">

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
					<li><a href="{{ url('/surveylist/') }}">アンケート一覧</a></li>
					<li><a href="{{ url('/student/') }}">生徒一覧</a></li>
					<li class="fh5co-active"><a href="{{ url('/score/') }}">点数早見表</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; 2020 carecon. All Rights Reserved.</small></p>
			</div>

		</aside>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">点数早見表</h2>

				<form class="form-inline">
					<div class="form-group">
						<label>選択した期間で受講した生徒をソート：</label>
						<input type="date" name="sort-start">
						<label>〜</label>
						<input type="date" name="sort-end">
					</div>
					<div class="form-group">
						<select class="select-test" name="test" size="1">
							<option value="">---テストを選択---</option>
							<?php
							foreach($rows as $row){
								?>
								<option value="選択肢2"><?php echo $row['test_title']; ?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-md" value="検索">
					</div>
				</form>

				<div class="row row-bottom-padded-md">
					<table  style="table-layout:fixed;">
						<tr>
					    <th style="width:5%;">No</th>
					    <th>生徒</th>
					    <th>
					      <?php echo $row['test_title']; ?>
					      <?php echo "平均50点"; ?>
					  </th>
					</tr>
					<?php
					foreach($rows as $row){
					  ?>
					  <tr>
					    <td><?php echo $row['user_id']; ?></td> <!-- テストナンバーに変える -->
					    <td><?php echo $row['user_id']; ?></td>
					    <td><?php echo $row['test_title']; ?></td>
					  </tr>
					  <?php
					}
					?>
				</table>
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
