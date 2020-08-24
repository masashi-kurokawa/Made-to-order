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
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

		//追加ボタンがクリックされたら、function(){…}の処理を実行する
		$('#add').click(function(){
        var html = '<tr><td><textarea name="kanso" rows="4" cols="50">ここに問題文を入力してください。</textarea></td><td><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"><input type="radio" name="radio"><input type="text" name="answer" value="回答を入力してください。"></td><td><button class="remove">-</button></td></tr>';
				//append()を使ってtbody内の一番最後にhtmlを追加する
				$('tbody').append(html);
    });

		// Tr削除処理
		//削除ボタンがクリックされたら、function(){…}の処理を実行する
		$(document).on('click', '.remove', function() {
				//クリックされた.removeの親要素trをremove（削除）する
        $(this).parents('tr').remove();
    });

		// 値を取得処理（確認用）
		$('#getValues').click(function(){
        var values = [];
        $('input[name="name"]').each(function(i, elem){
            values.push($(elem).val());
        });
        alert(values.join(', '));
    });

});
</script>
</body>
</html>
