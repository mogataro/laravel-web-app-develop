<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Sample Events</title>
</head>
<body>
<h1>
  Event Listener test!!
</h1>

<form action="{{ url('sample/events/deleat')}}" method="post">
  {{ csrf_field() }}
  <button type="submit" name="deleat">
   ファイルを削除して更新
  </button>
</form>

  <button type="submit" name="re" onclick="window.location.reload();">
   更新
  </button>

  <form action="{{ url('sample/events/queue')}}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="deleat" onclick="this.form.target='_blank'">
     キューワーカを実行
    </button>
  </form>
  
  <form action="{{ url('sample/events/log-deleat')}}" method="post">
    {{ csrf_field() }}
    <button type="submit" name="deleat">
     Log削除
    </button>
  </form>

<h2>作成テキスト</h2>
@if(!empty($text))
<div>{!! $text !!}</div>
@endif

<h2>Log</h2>
@if(!empty($log))
<div>{!! $log !!}</div>
@endif

</body>
</html>