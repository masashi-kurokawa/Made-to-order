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

<div class="container">
    <table>
        <tbody>
          <tr>
            <td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td>
            <td><input type="text" name="text" value="回答を入力してください。"></td>
            <td><button class="remove">-</button></td>
          </tr>
        </tbody>
    </table>

    <button id="addTest1">+ 問題追加 1回答</button>
    <button id="addTest2">+ 問題追加 2回答</button>
		<button id="addChoice2">+ 2択問題追加</button>
    <button id="addChoice3">+ 3択問題追加</button>
    <button id="addChoice4">+ 4択問題追加</button>
    <button id="addText">+ 問題追加 テキスト回答</button>
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
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><input type="text" name="text" value="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // 問題追加 2回答
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addTest2').click(function(){
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><input type="text" name="text" value="回答を入力してください。"><input type="text" name="text" value="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // 2択問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addChoice2').click(function(){
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><form><input type="radio" name="Choice2"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice2"><input type="text" name="answer" value="回答を入力してください。"></form></td><td><button class="remove">-</button></td></tr>';
        //append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // 3択問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addChoice3').click(function(){
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><form><input type="radio" name="Choice3"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice3"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice3"><input type="text" name="answer" value="回答を入力してください。"></form></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // 4択問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addChoice4').click(function(){
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><form><input type="radio" name="Choice4"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="Choice4"><input type="text" name="answer" value="回答を入力してください。"></form></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

    // テキスト問題追加
		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#addText').click(function(){
        var html = '<tr><td><textarea name="test" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><textarea name="test" rows="4" cols="50">テキスト</textarea></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

		// 削除処理
		//削除ボタンがクリックされたら、function(){…}の処理を実行する
		$(document).on('click', '.remove', function() {
				//クリックされた.removeの親要素trをremove（削除）する
        $(this).parents('tr').remove();
    });

		// 値を取得処理（確認用）
		$('#getValues').click(function(){
        var values = [];
        $('input[name="test"]').each(function(i, elem){
            values.push($(elem).val());
        });
        alert(values.join(', '));
    });

});
</script>
</body>
</html>
