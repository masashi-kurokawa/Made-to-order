<!DOCTYPE html>
<html lang="ja">
<!-- css -->
<link rel="stylesheet" href="{{ asset('/css/base.css') }}">
<link rel="stylesheet" href="{{ asset('/css/list.css') }}">


<head>
  <meta charset="UTF-8">
  <title>テスト問題一覧</title>
</head>

<body>
  <header>
    <h1>テスト問題一覧</h1>
  </header>

  <div class="content">
    <div class="box">
      <h4>タイトル</h4>
      <p>2020/07/20 更新</p>
      <a href="#">テストを始める</a>
    </div>

    <div class="box">
      <h4>タイトル</h4>
      <p>2020/07/20 更新</p>
      <a href="#">テストを始める</a>
    </div>
  </div><!-- contents -->

  <div class="back">
    <a href="{{ url('/home/') }}">戻る</a>
  </div>

  <footer>
    <small>Copyright &copy; 2020-2020 carecon Corporation. All Rights Reserved.</small>
  </footer>

</body>
</html>
