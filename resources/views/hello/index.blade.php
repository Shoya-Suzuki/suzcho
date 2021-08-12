@extends('layouts.helloapp')

@section('title','Index')
@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>本文コンテンツ文章</p>
  <p>I was made to hit in the USA.</p>


<table>
<tr><th>ID</th><th>NAME</th><th>MAIL</th><th>AGE</th>
@foreach($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->mail}}</td>
    <td>{{$item->age}}</td>

  </tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
