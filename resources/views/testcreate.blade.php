<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>テーブル追加</title>
		<!-- スタイル読み込み -->
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
<<<<<<< HEAD
<div class="container">
    <table>
        <tbody>
            <tr>
              <td><textarea name="kanso" rows="4" cols="50">ここに問題文を入力してください。</textarea></td>
							<td>
		 					<input type="radio" name="a"><input type="text" name="answer" value="回答を入力してください。">
		 					<input type="radio" name="a"><input type="text" name="answer" value="回答を入力してください。">
		 					<input type="radio" name="a"><input type="text" name="answer" value="回答を入力してください。">
		 					<input type="radio" name="a"><input type="text" name="answer" value="回答を入力してください。">
	 						</td>
              <td><button class="remove">-</button></td>
            </tr>
        </tbody>
    </table>
    <button id="addRow">+ 問題追加</button>
		<button id="add">+ 問題追加</button>
    <button id="getValues">値を取得</button>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$(function(){

		// 並び替え機能
    $('tbody').sortable();

		// Tr追加処理
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addRow').click(function(){
        var html = '<tr><td><textarea name="kanso" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><input type="text" name="text" value="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
=======

<div id="count" class="container">
  <form action="" method="post">
    <table>
      <tbody>
        <tr>
          <td><textarea name="text" rows="5" cols="50" placeholder="ここに問題文を入力してください。"></textarea></td>
          <td><input type="text" name="text" placeholder="回答を入力してください。"></td>
          <td><button class="remove">-</button></td>
        </tr>
      </tbody>
    </table>
  </form>

  <p id="output">1</p>

  <button id="addTest1" class="plus">+ 問題追加 1回答</button></td>
  <button id="addTest2" class="plus">+ 問題追加 2回答</button>
  <button id="addChoice4" class="plus">+ 4択問題追加</button>
  <button id="addChoice8">+ 8択問題追加</button>
  <button id="addText">+ テキスト問題追加</button>
  <button id="getValues">値を取得</button>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
$(function(){
    // 並び替え機能
    $('tbody').sortable();

		// 問題追加 1回答
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addTest1').click(function(){
        var html = '<tr><td><textarea name="text" rows="5" cols="50" placeholder="ここに問題文を入力してください。"></textarea></td><td><input type="text" name="text" placeholder="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // 問題追加 2回答
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addTest2').click(function(){
        var html = '<tr><td><textarea name="text" rows="5" cols="50" placeholder="ここに問題文を入力してください。"></textarea></td><td><input type="text" name="text" placeholder="回答を入力してください。"><input type="text" name="text" placeholder="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
>>>>>>> feature/yutaka
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

<<<<<<< HEAD
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#add').click(function(){
        var html = '<tr><td><textarea name="kanso" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
=======
    // 4択問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addChoice4').click(function(){
        var html = '<tr><td><textarea name="text" rows="5" cols="50" placeholder="ここに問題文を入力してください。"></textarea></td><td><form><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" placeholder="回答を入力してください。"></form></td><td><button class="remove">-</button></td></tr>';
>>>>>>> feature/yutaka
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

<<<<<<< HEAD
		// Tr削除処理
=======
    // 8択問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addChoice8').click(function(){
        var html = '<tr><td><textarea name="text" rows="5" cols="50" placeholder="ここに問題文を入力してください。"></textarea></td><td><form><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"><input type="radio" name="Choice8"><input type="text" name="answer" placeholder="回答を入力してください。"></form></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

		// 削除処理
>>>>>>> feature/yutaka
		//削除ボタンがクリックされたら、function(){…}の処理を実行する
		$(document).on('click', '.remove', function() {
				//クリックされた.removeの親要素trをremove（削除）する
        $(this).parents('tr').remove();
    });

		// 値を取得処理（確認用）
		$('#getValues').click(function(){
        var values = [];
<<<<<<< HEAD
        $('input[name="name"]').each(function(i, elem){
=======
        $('input[name="test"]').each(function(i, elem){
>>>>>>> feature/yutaka
            values.push($(elem).val());
        });
        alert(values.join(', '));
    });

});
</script>
<<<<<<< HEAD
=======
<script>

    $(document).on('click', '.plus', function() {
        $('#output').html(function(i, val) { return val*1+1 });
    });

    $(document).on('click', '.remove', function() {
        $('#output').html(function(i, val) { return val*1-1 });
    });

</script>
>>>>>>> feature/yutaka
</body>
</html>
