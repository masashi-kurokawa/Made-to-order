<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post" action="{{ route('authtest') }}">
      @csrf
      <input type="text" name="slack_name" value="">
      <input type="text" name="slack_mail" value="">
      <input type="submit" name="login" value="ログイン">
    </form>
  </body>
</html>
