@extends('layouts.helloapp')

@section('title','Board.index')
@section('menubar')
  @parent
　　ボード・ページ
@endsection

@section('content')

<table>
<tr><th>Message</th><th>Name</th><th>Delete</th></tr>
@foreach($items as $item)
  <tr>
    <td>{{$item->message}}</td>
    <td>{{$item->person->name}}</td>
  <td>
    <form action="board/del" method="get">
    <input type ="hidden" name="id" value="{{$item->id}}">
    <input type="submit" value="delete">
    </form>
  </td>
  </tr>
@endforeach
</table>

@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
