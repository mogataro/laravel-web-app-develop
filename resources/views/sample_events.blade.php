<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Sample Events</title>
</head>
<body>
<p>
  Event test!!
</p>

<form action="{{ url('sample/events/deleat')}}" method="post">
  {{ csrf_field() }}
  <button type="submit" name="deleat">
   ファイルを削除して更新
  </button>
</form>
{{-- <form action="{{ url('sample/events')}}" method="post">
  {{ csrf_field() }} --}}
  <button type="submit" name="re" onclick="window.location.reload();">
   更新
  </button>
{{-- </form> --}}

@if(!empty($log))
<div>{!!$log !!}</div>
@endif
</body>
</html>