<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>フォーム入力項目を動的に追加・削除【jquery】：サンプル</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
	//追加
	$('.addformbox').click(function() {
		//クローンを変数に格納
		var clonecode = $('.box:last').clone(true);

		//数字を＋１し変数に格納
		var cloneno = clonecode.attr('data-formno');
		var cloneno2 = parseInt(cloneno) + 1;
		var cloneno3 = parseInt(cloneno) + 2;

		//data属性の数字を＋１
		clonecode.attr('data-formno',cloneno2);

		//数値
		clonecode.find('.no').html(cloneno3);

		//name属性の数字を+1
		var namecode = clonecode.find('input.namae').attr('name');
		namecode = namecode.replace(/input\[[0-9]{1,2}/g,'input[' + cloneno2);
		clonecode.find('input.namae').attr('name',namecode);

		var namecode2 = clonecode.find('textarea.toiawase').attr('name');
		namecode2 = namecode2.replace(/textarea\[[0-9]{1,2}/g,'textarea[' + cloneno2);
		clonecode.find('textarea.toiawase').attr('name',namecode2);

		//HTMLに追加
		clonecode.insertAfter($('.box:last'));
	});


	//削除
	$('.deletformbox').click(function() {
		//クリックされた削除ボタンの親要素を削除
		$(this).parents(".box").remove();

		var scount = 0;
		//番号振り直し
		$('.box').each(function(){
			var scount2 = scount + 1;

			//data属性の数字
			$(this).attr('data-formno',scount);

			$('.no',this).html(scount2);


			//input質問タイトル番号振り直し
			var name = $('input.namae',this).attr('name');
			name = name.replace(/input\[[0-9]{1,2}/g,'input[' + scount);
			$('input.namae',this).attr('name',name);

			var name2 = $('textarea.toiawase',this).attr('name');
			name2 = name2.replace(/textarea\[[0-9]{1,2}/g,'textarea[' + scount);
			$('textarea.toiawase',this).attr('name',name2);

			scount += 1;
		});
	});

});
</script>
</head>

<body>
	<!--action=""の中に最初は route('parts.store') が入っていた。石塚さん作成。 -->
	<form method="POST" action="{{ url('/surveycreate/') }}">
   @csrf
	<div class="box" data-formno="0" style="border:dashed 1px #ccc">
		<p class="no">1</p>
		<p>
		【Qタイトル】<br>
		<input type="text" name="part_title" class="form-control {{ $errors->has('part_title') ? 'is-invalid' : '' }}"
		id = "part_title"
		value=""
		>
		</p>
		<p>
		【Q内容】<br>
		<textarea name="textarea[0]" cols="30" rows="10" class="toiawase"></textarea>
		</p>
		<a class="deletformbox">削除</a>
	</div>
	<p><a class="addformbox">追加</a></p>

	<div class="box" data-formno="0" style="border:dashed 1px #ccc">
		<p class="no">1</p>
		<p>
		【Qタイトル】<br>
		<input type="text" name="input[0]" class="namae">
		</p>
		<p>
		【Q内容】<br>
		<textarea name="textarea[0]" cols="30" rows="10" class="toiawase"></textarea>
		</p>
		<a class="deletformbox">削除</a>
	</div>
	<p><a class="addformbox">追加</a></p>

	<div class="box" data-formno="0" style="border:dashed 1px #ccc">
		<p class="no">1</p>
		<p>
		【Qタイトル】<br>
		<input type="text" name="input[0]" class="namae">
		</p>
		<p>
		【Q内容】<br>
		<textarea name="textarea[0]" cols="30" rows="10" class="toiawase"></textarea>
		</p>
		<a class="deletformbox">削除</a>
	</div>
	<p><a class="addformbox">追加</a></p>

	<button type="submit" class="btn btn-primary">作成する</button>
   </form>

	 <input type="submit" class="btn btn-primary btn-md" onclick="location.href='{{ url('/surveylist/') }}'" value="戻る">

	</body>
</html>
