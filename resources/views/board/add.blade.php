@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
  @parent
  投稿ページ
@endsection

@section('content')

  <form action="add" method="post">
    <table>
      @csrf
      <tr><th>person id:</th><td><input type="number" name="person_id"></td></tr>
      <tr><th>title:</th><td><input type="text" name="title"></td></tr>
      <tr><th>message:</th><td><input type="text" name="message"></td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>

    </table>
  </form>
@endsection

@section('footer')
copyright 2021 suzcho.
@endsection
