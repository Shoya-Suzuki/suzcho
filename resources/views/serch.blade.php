<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1>Blade/Index</h1>
      <p>&#064;foreachディレクティブの例</p>
    <ul>
        @forelse ($items as $item)
            <li>name</li>
            <li>{{$item->name}}</li>
            <li>comment</li>
            <li>{{$item->comments}}</li>
        @empty
              <li>存在しないページです</li>
        @endforelse

    </ul>

</body>
</html>
