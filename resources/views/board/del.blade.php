@extends('layouts.helloapp')

@section('title', 'Board.Delete')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  <form action="del" method="post">
    <table>
      @csrf
      <input type ="hidden" name="id" value="{{$form->id}}">
      <tr><th>name:</th><td>{{$form->person->name}}</td></tr>
      <tr><th>title:</th><td>{{$form->title}}</td></tr>
      <tr><th>message:</th><td>{{$form->message}}</td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>

    </table>
  </form>
@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
